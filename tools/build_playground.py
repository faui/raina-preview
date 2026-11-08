"""Build a WordPress Playground preview of the theme (free, no server to be taken down).

Usage:
  python tools/build_playground.py [THEME_ZIP_URL]

Writes dist/raina-nocturne.zip (theme only: no docs/, tools/, CLAUDE.md, dist/) and dist/blueprint.json.
Host the zip at any public HTTPS URL that sends `Access-Control-Allow-Origin: *`
(raw.githubusercontent.com, GitHub Pages, Cloudflare Pages, Netlify), pass that URL here, and share:

  https://playground.wordpress.net/?blueprint-url=<URL of blueprint.json>
  or  https://playground.wordpress.net/#<blueprint JSON>   (prefix printed by this script)

Preview limits: site content resets on reload; networking is off, so the optional AI assistant rewrite is
unavailable (the allowlisted FAQ answers still work). Not a substitute for staging QA (BLOCKED items stay BLOCKED).
Default mode is non-launch, so pages are noindex,nofollow. No secrets are packaged.
"""
import json, sys, zipfile, urllib.parse
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
DIST = ROOT / 'dist'
SKIP_TOP = {'docs', 'tools', 'dist', '.git', '.gitignore', '.nojekyll', 'CLAUDE.md', 'node_modules', 'raina-nocturne.zip', 'blueprint.json', 'index.html'}
url = sys.argv[1] if len(sys.argv) > 1 else 'http://localhost:8000/raina-nocturne.zip'

DIST.mkdir(exist_ok=True)
zpath = DIST / 'raina-nocturne.zip'
with zipfile.ZipFile(zpath, 'w', zipfile.ZIP_DEFLATED) as z:
    for p in sorted(ROOT.rglob('*')):
        rel = p.relative_to(ROOT)
        if p.is_dir() or rel.parts[0] in SKIP_TOP or p.suffix == '.pyc':
            continue
        z.write(p, ('raina-nocturne' / rel).as_posix())

PREVIEW_UI = r"""<?php
/* Preview-only: hides WordPress admin chrome so clients see just the Raina editor. Never deploy. */
add_filter('show_admin_bar', '__return_false');
add_action('admin_head', function () {
    echo '<style>#adminmenumain,#wpadminbar,#wpfooter,.update-nag,.notice-warning{display:none!important}#wpcontent,#wpfooter{margin-left:0!important}html.wp-toolbar{padding-top:0!important}#raina-back{position:fixed;left:12px;bottom:12px;z-index:99999;background:#12332f;color:#fff;padding:10px 16px;border-radius:999px;font:600 14px system-ui;text-decoration:none;box-shadow:0 2px 8px rgba(0,0,0,.3)}</style>';
});
add_action('admin_footer', function () {
    if (($_GET['page'] ?? '') !== 'raina-website') {
        echo '<a id="raina-back" href="' . esc_url(admin_url('admin.php?page=raina-website')) . '">&larr; Back to website editor</a>';
    }
});
"""

blueprint = {
    '$schema': 'https://playground.wordpress.net/blueprint-schema.json',
    'landingPage': '/',
    'preferredVersions': {'php': '8.2', 'wp': 'latest'},
    'features': {'networking': False},
    'steps': [
        {'step': 'installTheme', 'themeData': {'resource': 'url', 'url': url}, 'options': {'activate': True}},
        {'step': 'setSiteOptions', 'options': {'blogname': 'Raina Dental Care (preview)', 'permalink_structure': '/%postname%/'}},
        {'step': 'writeFile', 'path': '/wordpress/wp-content/mu-plugins/raina-preview-ui.php', 'data': PREVIEW_UI},
        {'step': 'runPHP', 'code': "<?php require '/wordpress/wp-load.php'; flush_rewrite_rules(false);"},
    ],
}
(DIST / 'blueprint.json').write_text(json.dumps(blueprint, indent=2))
print(f'zip: {zpath} ({zpath.stat().st_size // 1024} KB)')
print('open: https://playground.wordpress.net/#' + urllib.parse.quote(json.dumps(blueprint, separators=(',', ':'))))
