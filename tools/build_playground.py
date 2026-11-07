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

blueprint = {
    '$schema': 'https://playground.wordpress.net/blueprint-schema.json',
    'landingPage': '/',
    'preferredVersions': {'php': '8.2', 'wp': 'latest'},
    'features': {'networking': False},
    'steps': [
        {'step': 'installTheme', 'themeData': {'resource': 'url', 'url': url}, 'options': {'activate': True}},
        {'step': 'setSiteOptions', 'options': {'blogname': 'Raina Dental Care (preview)', 'permalink_structure': '/%postname%/'}},
        {'step': 'runPHP', 'code': "<?php require '/wordpress/wp-load.php'; flush_rewrite_rules(false);"},
    ],
}
(DIST / 'blueprint.json').write_text(json.dumps(blueprint, indent=2))
print(f'zip: {zpath} ({zpath.stat().st_size // 1024} KB)')
print('open: https://playground.wordpress.net/#' + urllib.parse.quote(json.dumps(blueprint, separators=(',', ':'))))
