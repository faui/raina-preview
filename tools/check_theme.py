"""Source-level smoke audit. Requirements: python3, php CLI, BeautifulSoup (pip install beautifulsoup4)."""
from pathlib import Path
from bs4 import BeautifulSoup
import subprocess, json, os
PHP = os.environ.get('RAINA_PHP', 'php')

ROOT=Path(__file__).resolve().parents[1]
SITE=ROOT/'site'
PAGES=[SITE/'index.php', SITE/'404.php', *SITE.glob('care/*/index.php'),*SITE.glob('journal/**/index.php')]
errors=[]
for path in PAGES:
    html=subprocess.check_output([PHP,'-r', "define('ABSPATH', '/'); include " + json.dumps(str(path)) + ';'],text=True,encoding='utf-8')
    soup=BeautifulSoup(html,'html.parser')
    if not soup.select_one('main h1') and path.name=='index.php':errors.append(f'No H1: {path}')
    if not soup.title:errors.append(f'No title: {path}')
    if not soup.select_one('meta[name="description"]') and path.name=='index.php':errors.append(f'No meta description: {path}')
    for a in soup.select('a[href^="/"]'):
        href=a.get('href','').split('#')[0].split('?')[0]
        if not href or href=='/':continue
        if href in ['/script.js','/style.css'] or href.startswith('/assets/'):
            target=SITE/href.lstrip('/')
        elif href.startswith('/#'):
            continue
        else:
            target=SITE/href.lstrip('/')/'index.php'
        if not target.exists():errors.append(f'Broken internal path: {path.relative_to(ROOT)} -> {href}')
print(f'Examined {len(PAGES)} static PHP templates; issues: {len(errors)}')
for err in errors:print('FAIL:',err)
raise SystemExit(1 if errors else 0)
