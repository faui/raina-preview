const chat = document.querySelector('#chat-dialog');
const chatInput = document.querySelector('#chat-input');
const chatForm = document.querySelector('#chat-form');
const messages = document.querySelector('#chat-messages');
const menuButton = document.querySelector('.menu-button');
const nav = document.querySelector('#site-nav');
const phone = ['Call (630) 381-4021', 'tel:+16303814021'];
const root = document.documentElement.dataset.root || '/';
const assetRoot = document.documentElement.dataset.assets || '/';
const assistantEndpoint = document.documentElement.dataset.assistant;
const hiddenServices = new Set((document.documentElement.dataset.hiddenServices || '').split(','));
const search = document.querySelector('#service-search');
const signatureRail = document.querySelector('.signature-rail');

const compactNav = window.matchMedia('(max-width: 850px)');
function setMenu(open, {returnFocus = false} = {}) {
  nav.classList.toggle('is-open', open);
  menuButton.setAttribute('aria-expanded', String(open));
  menuButton.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
  document.body.classList.toggle('menu-open', open);
  if (open) {
    const first = nav.querySelector('a[href]');
    if (first) first.focus();
  } else if (returnFocus) {
    menuButton.focus();
  }
}
menuButton.setAttribute('aria-label', 'Open menu');
menuButton.addEventListener('click', () => setMenu(menuButton.getAttribute('aria-expanded') !== 'true', {returnFocus: true}));
nav.addEventListener('click', event => {
  if (event.target.closest('a')) setMenu(false);
});
document.addEventListener('keydown', event => {
  if (menuButton.getAttribute('aria-expanded') !== 'true') return;
  if (event.key === 'Escape') {
    event.preventDefault();
    setMenu(false, {returnFocus: true});
    return;
  }
  // Keep keyboard focus cycling through the open drawer (links, then the menu button) until it is closed.
  if (event.key === 'Tab' && compactNav.matches) {
    const items = [...nav.querySelectorAll('a[href], button:not([disabled])')].filter(item => item.offsetParent !== null);
    items.push(menuButton);
    const index = items.indexOf(document.activeElement);
    event.preventDefault();
    const next = index === -1 ? 0 : (index + (event.shiftKey ? -1 : 1) + items.length) % items.length;
    items[next].focus();
  }
});
document.addEventListener('click', event => {
  if (menuButton.getAttribute('aria-expanded') === 'true' && !event.target.closest('.header-inner')) setMenu(false);
});
compactNav.addEventListener('change', () => {
  if (!compactNav.matches) setMenu(false);
});
window.addEventListener('pageshow', () => setMenu(false));

if (search) {
  const groups = [...document.querySelectorAll('.care-group')];
  search.addEventListener('input', () => {
    const query = search.value.trim().toLowerCase();
    let matches = 0;
    for (const group of groups) {
      const groupMatches = group.querySelector('h3').textContent.toLowerCase().includes(query);
      const items = [...group.querySelectorAll('li')];
      for (const item of items) {
        const content = (item.textContent + ' ' + (item.dataset.keywords || '')).toLowerCase();
        item.hidden = !groupMatches && !content.includes(query);
        if (!item.hidden) matches++;
      }
      group.hidden = items.every(item => item.hidden);
    }
    document.querySelector('#service-results').textContent = query
      ? (matches ? matches + (matches === 1 ? ' service found' : ' services found') : 'No matching services. Try a different search.')
      : '';
  });
}

if (signatureRail) {
  function keepChatClear() {
    const bounds = signatureRail.getBoundingClientRect();
    const height = window.innerHeight;
    document.body.classList.toggle('chat-clear-rail', bounds.top < height - 16 && bounds.bottom > height - 76);
  }
  window.addEventListener('scroll', keepChatClear, {passive:true});
  window.addEventListener('resize', keepChatClear);
  keepChatClear();
}

if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
      for (const entry of entries) {
        if (!entry.isIntersecting) continue;
        entry.target.classList.add('enter-view');
        observer.unobserve(entry.target);
      }
    }, {threshold:.12});
    document.querySelectorAll('.approach-intro, .signature-card, .section-heading, .tech-inner, .plan, .journal-card, .care-pathways, .dentist-card, .care-steps li, .quote')
      .forEach(item => observer.observe(item));
  }
  const hero = document.querySelector('.hero');
  if (hero && window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
    hero.addEventListener('pointermove', event => {
      const bounds = hero.getBoundingClientRect();
      hero.style.setProperty('--art-x', ((event.clientX - bounds.left) / bounds.width - .5) * 18 + 'px');
      hero.style.setProperty('--art-y', ((event.clientY - bounds.top) / bounds.height - .5) * 12 + 'px');
    });
    hero.addEventListener('pointerleave', () => {
      hero.style.removeProperty('--art-x');
      hero.style.removeProperty('--art-y');
    });
  }
}

const topicRules = [
  ['reschedule', /\b(reschedul\w*|cancel\w*|change (a|my|the) (visit|appointment))\b/i],
  ['first-visit', /\b(first (visit|appointment)|new patient|nervous|anxious|what to bring)\b/i],
  ['smart', /\b(smart|amalgam|silver fillings?|mercury)\b/i],
  ['ozone', /\b(ozone|o3|o₃)\b/i],
  ['massage', /\b(massage)\b/i],
  ['membership', /\b(membership|adult plan|child plan)\b/i],
  ['approach', /\b(biologic\w*|holistic|fluoride|whole.person)\b/i],
  ['payment', /\b(insur\w*|cost\w*|cover\w*|price\w*|pay\w*|financ\w*|bill\w*)\b/i],
  ['hours', /\b(hours|open|closed|closing|monday|tuesday|wednesday|thursday|friday|weekend|saturday|sunday)\b/i],
  ['location', /\b(address|where|park\w*|location|direction\w*|map)\b/i],
  ['technology', /\b(technolog\w*|scan\w*|imaging|impression\w*|equipment|x.ray)\b/i],
  ['services', /\b(implant\w*|invisalign|aligner\w*|clean\w*|exam\w*|service\w*|whiten\w*|veneers|crown\w*|dentures)\b/i],
  ['appointments', /\b(book\w*|schedul\w*|appointment\w*)\b/i],
  ['team', /\b(team|staff|dentist|human|front desk|call|contact)\b/i],
  ['reviews', /\b(reviews?|testimonials?|patient stories)\b/i],
];
const urgent = /\b(urgent|emergency|bleed\w*|hurts?|toothache|swelling|swollen|injur\w*|trauma|abscess\w*|infection|unconscious|chok\w*|911)\b|can.t breathe|trouble breathing|in pain/i;
const privateDetails = /\b[\w.+-]+@[\w.-]+\.[a-z]{2,}\b|\b(?:\+?1[\s.-]?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}\b|\b(my name is|date of birth|insurance id|social security|medical record)\b/i;
let library;
let busy = false;
function loadLibrary() {
  library ||= fetch(assetRoot + 'data/faq.json').then(response => {
    if (!response.ok) throw new Error('Practice information unavailable');
    return response.json();
  }).catch(error => {
    library = undefined;
    throw error;
  });
  return library;
}

function addMessage(copy, isUser = false, actions = []) {
  const bubble = document.createElement('div');
  bubble.className = isUser ? 'chat-message user' : 'chat-message';
  const speaker = document.createElement('span');
  speaker.className = 'sr-only';
  speaker.textContent = isUser ? 'You: ' : 'Assistant: ';
  bubble.append(speaker, document.createTextNode(copy));
  for (const [label, href] of actions) {
    const link = document.createElement('a');
    link.className = 'text-link';
    link.textContent = label;
    link.href = href.startsWith('/') ? root + href.slice(1) : href;
    link.addEventListener('click', () => chat.close());
    bubble.append(link);
  }
  messages.append(bubble);
  messages.scrollTop = messages.scrollHeight;
}

async function ask(question) {
  const clean = question.trim();
  if (busy || !clean) return;
  const includesPrivateDetails = privateDetails.test(clean);
  addMessage(includesPrivateDetails ? 'Personal details hidden' : clean, true);
  if (urgent.test(clean)) {
    addMessage('Please contact the practice directly about urgent dental concerns. For a life-threatening emergency, call 911.', false, [phone]);
    return;
  }
  if (includesPrivateDetails) {
    addMessage('Please leave personal details out of chat. Call the office if you need to discuss an appointment or private concern.', false, [phone]);
    return;
  }
  const topics = topicRules.filter(([topic, rule]) => !hiddenServices.has(topic) && rule.test(clean)).slice(0, 2).map(([topic]) => topic);
  if (!topics.length) {
    addMessage('I can help with general questions about office hours, services, membership and appointments. For a specific concern, please call the office.', false, [phone]);
    return;
  }
  busy = true;
  chatForm.querySelector('button').disabled = true;
  try {
    const facts = await loadLibrary();
    const verified = topics.map(topic => facts[topic]).filter(Boolean);
    let copy = verified.map(([answer]) => answer).join(' ');
    const actions = verified.map(([, action]) => action);
    if (assistantEndpoint) {
      try {
        // The endpoint receives only public FAQ identifiers. The question stays in the browser.
        const response = await fetch(assistantEndpoint, {
          method:'POST', headers:{'Content-Type':'application/json'},
          body:JSON.stringify({topics}), signal:AbortSignal.timeout(6500),
        });
        if (response.ok) {
          const result = await response.json();
          if (typeof result.answer === 'string' && result.answer.trim()) copy = result.answer;
        }
      } catch {
        // The approved local answer remains available during a provider outage.
      }
    }
    addMessage(copy, false, actions);
  } catch {
    addMessage('Practice information is temporarily unavailable. Please call the office.', false, [phone]);
  } finally {
    busy = false;
    chatForm.querySelector('button').disabled = false;
  }
}

let chatOpener;
chat.addEventListener('close', () => { if (chatOpener) chatOpener.focus(); });
document.querySelectorAll('[data-chat]').forEach(button => button.addEventListener('click', () => {
  chatOpener = button;
  chat.showModal();
  chat.querySelector('.close-button').focus();
  loadLibrary().catch(() => {});
}));
chat.addEventListener('click', event => {
  if (event.target !== chat) return;
  const box = chat.getBoundingClientRect();
  if (event.clientX < box.left || event.clientX > box.right || event.clientY < box.top || event.clientY > box.bottom) chat.close();
});
chatForm.addEventListener('submit', event => {
  event.preventDefault();
  if (busy) return;
  ask(chatInput.value);
  chatInput.value = '';
  chatInput.focus();
});
document.querySelectorAll('[data-question]').forEach(button => button.addEventListener('click', () => ask(button.dataset.question)));

const oldCare = /^#care\/([a-z0-9-]+)$/.exec(location.hash);
if (oldCare && location.pathname === new URL(root, location.origin).pathname) {
  location.replace(root + (oldCare[1] === 'updates' ? 'journal/' : 'care/' + oldCare[1] + '/'));
}

// Treatment directory: keyboard-friendly live filtering with lay-term aliases, accent folding and ?q= deep links.
const directoryInput = document.querySelector('#directory-search');
if (directoryInput) {
  const categories = [...document.querySelectorAll('.treatment-category')];
  const countLabel = document.querySelector('#directory-results');
  const emptyLabel = document.querySelector('#directory-empty');
  const fold = value => value.normalize('NFD').replace(/[̀-ͯ]/g, '').toLocaleLowerCase().replace(/[^a-z0-9]+/g, ' ').trim();
  const stem = word => word.length > 4 ? word.replace(/(ings|ing|es|s)$/, '') : word;
  for (const item of document.querySelectorAll('.treatment-item')) {
    item.dataset.haystack = fold(item.textContent + ' ' + (item.dataset.keywords || '') + ' ' + item.closest('.treatment-category').querySelector('h2').textContent);
  }
  let announce;
  function filterTreatments() {
    const words = fold(directoryInput.value).split(' ').filter(Boolean).map(stem);
    let count = 0;
    for (const category of categories) {
      let visible = 0;
      for (const item of category.querySelectorAll('.treatment-item')) {
        item.hidden = words.length > 0 && !words.every(word => item.dataset.haystack.includes(word));
        if (!item.hidden) { visible++; count++; }
      }
      category.hidden = visible === 0;
    }
    clearTimeout(announce);
    // Debounced so screen readers hear the settled result rather than every keystroke.
    announce = setTimeout(() => {
      countLabel.textContent = words.length ? `${count} ${count === 1 ? 'treatment matches' : 'treatments match'} “${directoryInput.value.trim()}”` : '';
    }, 350);
    emptyLabel.hidden = !words.length || count !== 0;
  }
  directoryInput.addEventListener('input', filterTreatments);
  directoryInput.addEventListener('keydown', event => {
    if (event.key === 'Escape' && directoryInput.value) { event.preventDefault(); directoryInput.value = ''; filterTreatments(); }
    if (event.key === 'Enter') {
      event.preventDefault();
      const first = document.querySelector('.treatment-item:not([hidden])');
      if (first && document.querySelectorAll('.treatment-item:not([hidden])').length === 1) first.focus();
    }
  });
  const initial = new URLSearchParams(location.search).get('q');
  if (initial) {
    directoryInput.value = initial.slice(0, 60);
    filterTreatments();
  }
  document.querySelectorAll('[data-directory-query]').forEach(button => button.addEventListener('click', () => {
    directoryInput.value = button.dataset.directoryQuery;
    filterTreatments();
    directoryInput.focus();
  }));
}
