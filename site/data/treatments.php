<?php
// Treatment page content. Rendered by site/partials/treatment.php. `approval` notes list facts the practice must confirm
// before public launch (mirrored in docs/PRACTICE_APPROVALS.md) and are never rendered.
defined('ABSPATH') || exit;
return <<<'RAINA_JSON'
{
 "exams": {
  "doc_title": "Dental Exams & Cleanings: What Each Visit Includes",
  "meta": "How a dental exam differs from a professional cleaning, when X-rays are taken, and how a fluoride-free preventive approach fits routine care.",
  "h1": "Exams & cleanings",
  "group": "Prevention & family",
  "summary": "Routine dental exams and professional cleanings, with X-rays taken only when your history calls for them.",
  "keywords": "checkup check-up dental cleaning teeth exam hygiene visit hygienist prophylaxis scaling tartar x-rays six month new patient cleanning cleanings x-ray xray",
  "layout": "standard",
  "lead": "A routine visit usually combines two things: a cleaning that removes plaque and tartar, and an exam in which the dentist checks your teeth, gums and mouth for problems that are easier to manage early.",
  "overview": {
   "heading": "Two appointments in one visit",
   "lead": "The cleaning and the exam do different jobs. The cleaning removes hardened deposits called tartar (or calculus) that brushing and flossing cannot, then polishes the teeth. The exam is the dentist’s assessment of your overall oral health.",
   "paras": [
    "The dentist looks for decay, checks existing fillings and crowns, measures the small pockets between gums and teeth for signs of gum disease, and examines the lips, cheeks, tongue and throat. Medical history matters too: diabetes and medicines that cause dry mouth both affect teeth and gums.",
    "The practice describes its approach as fluoride-free. Fluoride is widely recommended by dental organizations for cavity prevention, and your dentist can talk through your cavity risk and the evidence behind fluoride and non-fluoride options so your choice is an informed one."
   ]
  },
  "considered": {
   "heading": "Who may benefit from visits more often than twice a year",
   "items": [
    "People with current or past gum disease, or deep gum pockets",
    "Anyone getting frequent new cavities or living with dry mouth",
    "People with diabetes, those who smoke or use tobacco, and people who are pregnant",
    "Patients with braces, implants or many crowns and fillings to maintain"
   ]
  },
  "compare": {
   "heading": "Cleaning or exam: who does what",
   "intro": "Both usually happen at the same appointment, but they answer different questions.",
   "columns": [
    "",
    "Professional cleaning",
    "Dental exam"
   ],
   "rows": [
    [
     "Main purpose",
     "Remove plaque, tartar and surface stains",
     "Check for decay, gum disease and other changes"
    ],
    [
     "Typically includes",
     "Scaling, polishing and home-care coaching",
     "Tooth, gum, bite and soft-tissue checks"
    ],
    [
     "Outcome",
     "Cleaner tooth surfaces and gumlines",
     "A diagnosis and any recommended next steps"
    ]
   ]
  },
  "steps": {
   "heading": "How a routine visit unfolds",
   "items": [
    {
     "title": "Health history update",
     "text": "You review changes in health, medications or symptoms since your last visit, including sensitivity or bleeding gums."
    },
    {
     "title": "Cleaning",
     "text": "Tartar is removed above and just below the gumline, the teeth are polished, and you hear which areas your brush or floss is missing."
    },
    {
     "title": "X-rays if indicated",
     "text": "X-rays are taken only when the dentist decides they are needed, based on your age, history, risk and symptoms – not on a fixed calendar."
    },
    {
     "title": "Exam and conversation",
     "text": "The dentist explains what was found and when to return. Any treatment is discussed before it is scheduled."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "When a routine cleaning is not enough",
   "paras": [
    "If the exam shows gum disease with deeper pockets, a standard cleaning may not reach the deposits causing it. A deeper cleaning called scaling and root planing – cleaning the root surfaces below the gumline – may be recommended, followed by more frequent maintenance visits.",
    "Bringing recent X-rays from a previous dentist can sometimes avoid repeating them. The practice offers in-house membership plans for adults and for children 12 and under; current details are on the Membership page."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "What happens at a first visit as a new patient?",
    "a": "A first visit usually takes longer than a routine one. The dentist reviews your full medical and dental history, examines every tooth and restoration, assesses your gums, and decides which X-rays, if any, are needed to establish a baseline."
   },
   {
    "q": "How often should I have a cleaning?",
    "a": "Every six months is common, but the right interval depends on your gum health, cavity history and general health. People treated for gum disease often need cleanings every three to four months."
   },
   {
    "q": "My teeth are sensitive. Will a cleaning be uncomfortable?",
    "a": "Tell the team before the cleaning starts so technique can be adjusted and breaks taken. Sensitivity often comes from exposed root surfaces or inflamed gums, and persistent sensitivity is worth investigating because it can point to decay or a crack."
   },
   {
    "q": "Do I need X-rays at every visit?",
    "a": "No. The ADA recommends that the dentist review your history and examine your mouth before deciding whether X-rays are needed, and how often depends on your oral health, age and risk of disease. Someone with no recent cavities may go considerably longer between X-rays than someone with active decay."
   }
  ],
  "related": [
   "oral-screening",
   "membership"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — X-rays",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/x-rays"
   }
  ],
  "approval": [
   "Approve the fluoride-free wording and confirm whether fluoride treatment is available on request or by referral",
   "Confirm who performs cleanings (dental hygienist or dentist) and the typical new-patient visit structure",
   "Confirm typical recall intervals the practice recommends, including periodontal maintenance intervals",
   "Confirm that oral cancer screening is part of routine exams before linking it as included"
  ]
 },
 "emergency": {
  "doc_title": "Emergency Dental Care: Toothache, Breaks & Swelling",
  "meta": "What counts as a dental emergency, how to protect a tooth until you are seen, and when swelling or bleeding means calling 911 instead.",
  "h1": "Emergency dental care",
  "group": "Prevention & family",
  "summary": "Help for severe toothache, broken or knocked-out teeth, lost crowns, swelling and mouth injuries.",
  "keywords": "dental emergency dentist toothache tooth pain broken cracked chipped knocked out lost filling crown fell off swollen face gum abscess urgent emergancy swelling bleeding today",
  "layout": "urgent",
  "lead": "If you have severe tooth pain, a broken or knocked-out tooth, or swelling in your gum or face, call the practice at (630) 381-4021 so the team can help you decide on the right next step. If swelling affects your breathing or swallowing, or bleeding will not stop, call 911.",
  "overview": {
   "heading": "Knowing which problems can’t wait",
   "lead": "Most dental emergencies fall into three groups: pain that signals infection or inflammation inside a tooth, damage to a tooth or restoration, and injury to the mouth. A dentist can often do more for a tooth that is seen early.",
   "paras": [
    "Pain is a poor guide to how serious a problem is. A tooth that throbbed for days and then went quiet may have an infected nerve rather than a healed one, and a small crack can spread with every bite. Some situations – a spreading infection, heavy bleeding, a serious facial injury – are medical emergencies first and dental problems second."
   ]
  },
  "considered": {
   "heading": "Situations that call for prompt dental attention",
   "items": [
    "Severe or throbbing toothache, especially one that wakes you at night",
    "A cracked, broken or knocked-out tooth",
    "Swelling of the gum or jaw, or a pimple-like bump on the gum that may signal an abscess (a pocket of infection)",
    "A lost or broken filling or crown that leaves a sharp edge or a very sensitive tooth",
    "Cuts or injuries to the lips, tongue or cheeks after a fall or sports impact"
   ]
  },
  "compare": {
   "heading": "Dental office or emergency room?",
   "intro": "A general guide; when in doubt about breathing, bleeding or a head injury, choose emergency care.",
   "columns": [
    "",
    "Call the dental practice",
    "Call 911 or go to an ER"
   ],
   "rows": [
    [
     "Swelling",
     "Gum or face swelling without breathing or swallowing trouble",
     "Swelling that affects breathing, swallowing or spreads toward the eye or neck"
    ],
    [
     "Bleeding",
     "Bleeding that slows with firm, steady pressure",
     "Bleeding that will not stop with pressure"
    ],
    [
     "Injury",
     "Chipped, cracked, loosened or knocked-out tooth",
     "Suspected broken jaw, head injury or loss of consciousness"
    ],
    [
     "Fever",
     "Toothache or tender gum without fever",
     "High fever together with facial swelling"
    ]
   ]
  },
  "steps": {
   "heading": "What happens when you call",
   "items": [
    {
     "title": "Describe what happened",
     "text": "Tell the team when the problem started and whether there is swelling, fever, bleeding or injury. Share health details by phone, not through the website assistant."
    },
    {
     "title": "Guidance on timing",
     "text": "The team helps you judge how soon you should be seen and whether dental or emergency medical care comes first. Timing depends on the problem and that day’s schedule."
    },
    {
     "title": "A focused emergency exam",
     "text": "The dentist examines the area and takes X-rays if needed, aiming to find the cause rather than only quiet the symptoms."
    },
    {
     "title": "Stabilize first, then plan",
     "text": "Some problems can be stabilized at the first visit – smoothing a sharp edge or placing a temporary covering – while others need a follow-up. The dentist explains the options for lasting treatment."
    }
   ]
  },
  "expect": {
   "heading": "Protecting the tooth until you’re seen",
   "items": [
    {
     "label": "Knocked-out adult tooth",
     "text": "Hold the tooth by the crown, not the root, and keep it moist. If you can, place it gently back in the socket; otherwise keep it between your cheek and gum or in milk, and get to a dentist right away. Do not try to put a knocked-out baby tooth back in."
    },
    {
     "label": "Broken tooth or lost crown",
     "text": "Rinse with warm water, keep any pieces, and use a cold compress on the face to limit swelling. Keep a crown that has come off, chew on the other side, and never reattach it with household glue."
    },
    {
     "label": "Toothache",
     "text": "Rinse with warm water and floss gently to remove anything trapped. Do not put aspirin against the gum, which can burn the tissue; use over-the-counter pain relief only as directed on the label."
    }
   ]
  },
  "considerations": {
   "heading": "Why waiting can make things harder",
   "paras": [
    "Dental infections do not resolve on their own, and delay can narrow your options. A cracked tooth caught early may be protected with a crown, while the same crack extending below the gumline may leave extraction as the only choice.",
    "If the office is closed and symptoms are severe, the ADA advises going to a local emergency room. An emergency department can manage pain, infection and injury, but most cannot repair teeth, so plan a dental visit as soon as possible afterward."
   ]
  },
  "callout": {
   "heading": "Call 911 or go to an emergency room if…",
   "text": "Swelling in your face, jaw or neck makes it hard to breathe or swallow, bleeding will not stop with firm pressure, you have a serious head, face or jaw injury, or you have a high fever along with facial swelling. These situations need emergency medical care before dental care."
  },
  "faqs": [
   {
    "q": "Should I go to the ER for a toothache?",
    "a": "For a toothache without warning signs, a dentist is usually the right first call, because an emergency room can relieve pain but generally cannot treat the tooth. If it comes with facial swelling, fever, or trouble breathing or swallowing, go to the ER or call 911."
   },
   {
    "q": "Will antibiotics clear up a tooth infection?",
    "a": "Antibiotics can help control an infection that is spreading, and a dentist or physician prescribes them only when they are clinically appropriate. They do not remove the source of the infection inside the tooth or gum. Without treatment such as a root canal, drainage or extraction, the infection commonly returns."
   },
   {
    "q": "Can I be seen the same day?",
    "a": "That depends on the problem and the schedule that day, so the team will tell you what is possible when you call. If you cannot be seen promptly and have any of the red-flag symptoms on this page, emergency medical care is the safer choice."
   },
   {
    "q": "How can I lower the risk of dental injuries?",
    "a": "Wear a mouthguard for contact sports and activities with a risk of falls. Avoid chewing ice or hard candy, and do not use your teeth to open packages. A cracked or heavily filled tooth is more likely to break, so having it assessed at routine visits can prevent an urgent one."
   }
  ],
  "related": [
   "root-canals",
   "extractions"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Dental Emergencies",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/dental-emergencies"
   }
  ],
  "approval": [
   "Confirm current office hours and any after-hours instructions or emergency phone message before publishing after-hours guidance",
   "Confirm whether emergency appointments are reserved daily and approve any same-day availability wording (none is promised in this copy)",
   "Confirm whether emergency visits are offered to new patients as well as established patients",
   "Clinician review of the 911/ER escalation callout, the comparison table and the first-aid guidance for knocked-out teeth, broken teeth and toothache",
   "Confirm whether an emergency exam is included in membership plans before any cross-reference is added"
  ]
 },
 "oral-screening": {
  "doc_title": "Oral Cancer Screening: What the Check Involves",
  "meta": "What an oral cancer screening looks at, which mouth changes deserve a professional look, and what happens if an area needs follow-up.",
  "h1": "Oral cancer screening",
  "group": "Prevention & family",
  "summary": "A look-and-feel check of the mouth, lips, tongue, throat and neck, usually done during a routine exam.",
  "keywords": "oral cancer check mouth cancer screening throat cancer lump in mouth white patch red patch mouth sore that won’t heal tongue cancer leukoplakia oral cancer exam",
  "layout": "standard",
  "lead": "An oral cancer screening is a brief look-and-feel check of your mouth, lips, tongue, throat and neck for changes that need a closer look. It is not a diagnosis; most findings turn out to be harmless, but persistent changes deserve evaluation.",
  "overview": {
   "heading": "A careful look at tissue you can’t easily see",
   "lead": "The dentist looks at the inside of the lips and cheeks, the gums, every surface of the tongue including underneath, the floor and roof of the mouth, and the back of the throat. They also feel the jaw and neck for lumps or enlarged lymph nodes.",
   "paras": [
    "Known risk factors include tobacco use, heavy alcohol use and, for throat cancers, HPV (human papillomavirus) infection; sun exposure raises the risk of lip cancer. People without these risk factors can still develop oral cancer, so the check is part of routine care for adults."
   ]
  },
  "considered": {
   "heading": "Changes worth having checked",
   "items": [
    "A sore, irritation, lump or thick patch in the mouth, lip or throat lasting more than two weeks",
    "A white or red patch inside the mouth",
    "A persistent sore throat, hoarseness, or a feeling that something is caught in the throat",
    "A lump in the neck, or difficulty chewing, swallowing or moving the jaw or tongue",
    "Dentures that suddenly fit poorly because of swelling"
   ]
  },
  "compare": null,
  "steps": {
   "heading": "If an area needs a second look",
   "items": [
    {
     "title": "Documenting what was seen",
     "text": "The dentist notes the location, size and appearance of the area so any change can be measured."
    },
    {
     "title": "A short recheck",
     "text": "Many spots come from irritation – a sharp tooth, a denture, a bitten cheek – and are rechecked after about two weeks. Areas that heal usually need no further steps."
    },
    {
     "title": "Referral for a biopsy",
     "text": "An area that persists or looks suspicious is referred to a specialist, such as an oral surgeon or ear, nose and throat doctor, for a biopsy – removal of a small tissue sample. Only a biopsy can confirm or rule out cancer."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "What screening can and can’t tell you",
   "paras": [
    "The National Cancer Institute notes that there is no standard screening test for oral cancer and that studies have not shown screening lowers the risk of dying from it. A routine check can still find changes early, but it can miss some, and it can flag areas that turn out to be harmless.",
    "Screening is not a substitute for paying attention between visits. If you notice any of the changes listed above lasting more than two weeks, have them looked at rather than waiting for your next checkup."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "How long does the screening take, and does it hurt?",
    "a": "The check takes a few minutes and is done with a light, a small mirror, gauze to hold the tongue and the dentist’s fingertips. It involves gentle pressure but no instruments that cut or puncture the tissue."
   },
   {
    "q": "I don’t smoke or drink. Do I still need it?",
    "a": "Avoiding tobacco and heavy drinking lowers your risk considerably, but it does not remove it, particularly for HPV-related throat cancers. Because the check is quick, it is commonly included for adults regardless of risk factors."
   },
   {
    "q": "Are special lights or rinses better than a regular exam?",
    "a": "Some practices use lights or dyes that make certain tissue changes easier to see. The evidence that these tools improve on a careful visual and hands-on exam is limited, and none of them replaces a biopsy when an area is suspicious."
   }
  ],
  "related": [
   "exams",
   "membership"
  ],
  "sources": [
   {
    "label": "NIDCR — Oral Cancer",
    "url": "https://www.nidcr.nih.gov/health-info/oral-cancer"
   },
   {
    "label": "National Cancer Institute — Oral Cavity and Nasopharyngeal Cancers Screening (PDQ)",
    "url": "https://www.cancer.gov/types/head-and-neck/patient/oral-screening-pdq"
   }
  ],
  "approval": [
   "Confirm that oral cancer screening is part of every routine adult exam and whether it is included in membership plans as currently published",
   "Confirm whether any adjunctive screening devices (lights, dyes) are used at the practice",
   "Confirm the referral pathway for biopsy (oral surgeon, ENT or other) before naming it"
  ]
 },
 "pediatric": {
  "doc_title": "Children’s Dental Care: First Visits & Checkups",
  "meta": "When to book a child’s first dental visit, what happens at checkups, how parents can help at home, and the child membership for ages 12 and under.",
  "h1": "Children’s dental care",
  "group": "Prevention & family",
  "summary": "Checkups, cleanings and home-care guidance for children, with parents involved from the first visit.",
  "keywords": "kids dentist children’s childrens pediatric baby teeth first dental visit toddler child checkup cleaning family peditric kid children teen",
  "layout": "standard",
  "lead": "The American Academy of Pediatric Dentistry recommends a child’s first dental visit when the first tooth appears, and no later than the first birthday. Early visits are short and gentle, and much of the time is spent helping parents protect new teeth.",
  "overview": {
   "heading": "Building a calm relationship with the dentist early",
   "lead": "Children who visit the dentist before anything hurts tend to see it as an ordinary part of life. Early visits let your child get used to the chair, the light and the team, while problems are still small or have not started.",
   "paras": [
    "Baby teeth matter even though they fall out. They hold space for adult teeth and help children chew and speak clearly, and decay in them – one of the most common chronic conditions of childhood – is largely preventable."
   ]
  },
  "considered": {
   "heading": "Good reasons to book a child’s visit",
   "items": [
    "The first tooth has appeared, or your child is approaching their first birthday",
    "Routine checkups, which the AAPD suggests every six months unless the dentist advises otherwise",
    "A dark spot, chip, toothache or swelling",
    "A fall or sports injury involving the mouth",
    "Questions about thumb sucking, pacifiers, grinding or how the teeth are coming in"
   ]
  },
  "compare": null,
  "steps": {
   "heading": "How a first visit usually goes",
   "items": [
    {
     "title": "Getting acquainted",
     "text": "Very young children are often examined on a parent’s lap; older children can explore the chair first."
    },
    {
     "title": "A gentle look and count",
     "text": "The dentist checks the teeth, gums, bite and soft tissues for early signs of decay, often in a few minutes."
    },
    {
     "title": "Cleaning when ready",
     "text": "A cleaning is done if your child is comfortable; a hesitant child need not complete every step at the first visit."
    },
    {
     "title": "Coaching for parents",
     "text": "You get practical advice on brushing, toothpaste, snacks, drinks and habits for your child’s age."
    }
   ]
  },
  "expect": {
   "heading": "Helping your child feel ready",
   "items": [
    {
     "label": "Before",
     "text": "Talk about the visit simply and positively, and avoid words like “hurt” or “shot.” Book at a time of day when your child is usually rested and fed."
    },
    {
     "label": "During",
     "text": "Your calm tone helps more than any explanation. The team will explain how parents are involved during the exam and cleaning."
    },
    {
     "label": "After",
     "text": "Praise your child for what they did, even if they only sat in the chair."
    }
   ]
  },
  "considerations": {
   "heading": "Home care, and when a specialist makes sense",
   "paras": [
    "Brush twice a day with a soft, child-sized brush, helping until your child can do it thoroughly alone. Limit sugary drinks and grazing, and avoid bedtime bottles of milk or juice. Your dentist can explain toothpaste choices, including fluoride and fluoride-free options, and amounts for each age.",
    "Extensive decay, the need for sedation or general anesthesia, certain special healthcare needs and bite concerns are common reasons a child is referred to a pediatric dentist or an orthodontist."
   ]
  },
  "callout": {
   "heading": "Membership for children 12 and under",
   "text": "Raina Dental Care offers an in-house child membership plan for patients 12 and under, separate from the adult plan. Current inclusions and fees are listed on the Membership page."
  },
  "faqs": [
   {
    "q": "Do baby teeth really need fillings if they will fall out?",
    "a": "Often, yes. Some back baby teeth stay until around age 10 to 12, and untreated decay can cause pain, infection and early tooth loss that affects how adult teeth come in. Your dentist weighs how long the tooth is likely to remain."
   },
   {
    "q": "My child is nervous. What helps?",
    "a": "Short, predictable visits help most. Let the team explain each step in simple terms, avoid sharing your own dental worries in front of your child, and treat the visit as routine."
   },
   {
    "q": "Are dental X-rays safe for children?",
    "a": "Dental X-rays use low doses of radiation and are taken only when the dentist decides they are needed, based on age, cavity risk and symptoms. They help find decay between teeth and show how adult teeth are developing."
   },
   {
    "q": "What is the difference between a family dentist and a pediatric dentist?",
    "a": "Pediatric dentists complete two to three years of specialty training after dental school and limit their practice to children. Many children receive routine care from a general or family dentist, with referral to a pediatric specialist when their needs call for it."
   }
  ],
  "related": [
   "exams",
   "membership"
  ],
  "sources": [
   {
    "label": "American Academy of Pediatric Dentistry — Frequently Asked Questions",
    "url": "https://www.aapd.org/resources/parent/faq/"
   }
  ],
  "approval": [
   "Confirm the youngest age the practice sees children and whether infants are seen for first visits",
   "Confirm the practice’s policy on parents staying in the treatment room",
   "Confirm referral partners for pediatric specialist care, sedation or general anesthesia",
   "Confirm the child membership name, age limit (12 and under) and that the Membership page lists current terms",
   "Clinician review of first-visit timing (AAPD), brushing-independence guidance and the toothpaste wording given the fluoride-free approach"
  ]
 },
 "nutrition": {
  "doc_title": "Nutrition & Oral Health: Diet, Decay and Gums",
  "meta": "How sugar, acidic drinks, snacking habits and hydration affect teeth and gums, and how diet guidance fits alongside routine dental care.",
  "h1": "Nutrition & oral health",
  "group": "Biological dentistry",
  "summary": "How eating patterns, sugar and acidic drinks affect teeth and gums, with practical changes that help.",
  "keywords": "diet and teeth sugar and cavities food for healthy teeth acidic drinks soda snacking enamel erosion dry mouth nutrition counseling nutriton",
  "layout": "standard",
  "lead": "What you eat – and how often – shapes your risk of cavities, enamel erosion and gum problems. Diet guidance in a dental setting focuses on practical, sustainable changes that support routine care.",
  "overview": {
   "heading": "Why frequency matters as much as sugar",
   "lead": "Each time you eat or drink something containing sugar, plaque bacteria produce acid that attacks enamel. Sipping a sweet drink over an afternoon or grazing on snacks keeps the mouth acidic for longer than having the same amount with a meal.",
   "paras": [
    "Acidic drinks such as soda, sports and energy drinks, and citrus juices can dissolve enamel directly, a process called erosion, even when they are sugar-free. Water and saliva help neutralize acid, and a balanced diet with adequate calcium and vegetables supports teeth and gums alongside general health."
   ]
  },
  "considered": {
   "heading": "When a diet conversation can help",
   "items": [
    "Frequent new cavities despite good brushing",
    "Enamel erosion or sensitivity linked to acidic drinks",
    "Dry mouth from medications or health conditions",
    "Children’s snacking and drink habits"
   ]
  },
  "compare": null,
  "steps": {
   "heading": "How diet guidance usually works",
   "items": [
    {
     "title": "Look at patterns",
     "text": "A few days’ record of what and when you eat and drink often reveals more than a list of foods."
    },
    {
     "title": "Pick one or two changes",
     "text": "Small, specific changes – such as keeping sweet drinks to mealtimes – are easier to keep than a complete overhaul."
    },
    {
     "title": "Review at checkups",
     "text": "Your dentist looks for changes in cavity activity, erosion and gum health at later visits."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "What diet can and can’t do",
   "paras": [
    "Diet supports, but does not replace, brushing, cleaning between teeth, professional cleanings and treatment of existing decay or gum disease. No food or supplement repairs a cavity. If eating patterns are tied to a medical condition, reflux or an eating disorder, your physician or a registered dietitian should be involved."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "Is fruit bad for my teeth?",
    "a": "Whole fruit comes with fiber, water and nutrients, and the ADA notes that foods with natural sugars can be part of a healthy diet. Fruit juices and dried fruit are more concentrated and cling to teeth, so they are better kept to mealtimes."
   },
   {
    "q": "Are sugar-free drinks safe for teeth?",
    "a": "Sugar-free drinks avoid feeding cavity-causing bacteria, but many are still acidic enough to erode enamel. Water is the most tooth-friendly choice between meals."
   },
   {
    "q": "Should I brush right after an acidic drink?",
    "a": "Enamel is briefly softened after an acid exposure, so rinsing with water and waiting a while before brushing is often suggested. Your dentist can advise on timing if erosion is a concern for you."
   }
  ],
  "related": [
   "remineralization",
   "periodontal"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Diet and Dental Health",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/diet-and-dental-health"
   }
  ],
  "approval": [
   "Confirm whether nutrition guidance is offered as a defined service, its format (part of routine exams or a separate consultation) and who provides it"
  ]
 },
 "remineralization": {
  "doc_title": "Enamel Remineralization: Treating Early Decay",
  "meta": "How early enamel damage can sometimes be stopped or reversed, what a remineralization plan involves, and when a filling is still needed.",
  "h1": "Remineralization",
  "group": "Biological dentistry",
  "summary": "Supporting early enamel repair through home care, diet and professionally guided products.",
  "keywords": "remineralize teeth enamel repair white spots early cavity reverse cavity hydroxyapatite nano hydroxyapatite xylitol calcium phosphate demineralization weak enamel remineralisation",
  "layout": "standard",
  "lead": "Tooth enamel constantly loses and regains minerals. When decay is caught at the white-spot stage – before a hole forms – it can sometimes be stopped or reversed, and that is the goal of a remineralization plan.",
  "overview": {
   "heading": "Catching decay before it becomes a cavity",
   "lead": "Each time plaque bacteria break down sugars, they produce acids that pull calcium and phosphate out of enamel. Saliva works in the other direction, returning minerals between acid attacks. Early decay is what happens when losses outpace repair.",
   "paras": [
    "Fluoride is the most extensively studied agent for helping enamel repair itself. In keeping with the practice’s fluoride-free approach, remineralization plans here focus on non-fluoride options such as calcium phosphate–based products, nano-hydroxyapatite toothpaste (a synthetic form of the mineral that makes up enamel) and xylitol. Evidence for these is growing but is less extensive than for fluoride, and your dentist can explain how the options compare."
   ]
  },
  "considered": {
   "heading": "Where remineralization may fit",
   "items": [
    "White spots or early enamel lesions without a cavity",
    "White spot marks around brackets after braces",
    "High cavity risk from diet, dry mouth or medications",
    "Monitoring early changes seen on X-rays between the teeth"
   ]
  },
  "compare": null,
  "steps": {
   "heading": "Building a remineralization plan",
   "items": [
    {
     "title": "Assess the risk",
     "text": "The dentist looks at the lesions, your saliva flow, diet, medications and home care to understand why minerals are being lost."
    },
    {
     "title": "Change the conditions",
     "text": "Reducing how often you have sugary or acidic food and drinks gives saliva time to repair enamel between attacks."
    },
    {
     "title": "Choose products",
     "text": "Toothpaste, rinses or professionally applied products are selected to suit your risk and preferences."
    },
    {
     "title": "Recheck over months",
     "text": "Lesions are photographed or rechecked at later visits to confirm they are stable or improving."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Limits worth knowing",
   "paras": [
    "Remineralization cannot rebuild a tooth once a cavity has formed. At that point, the decayed tissue needs to be removed and the tooth restored, and delaying that can allow decay to reach the nerve. Monitoring matters because not every early lesion responds."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "Can a cavity heal on its own?",
    "a": "Early decay that has not broken through the enamel surface can be stopped or reversed when conditions improve. A true cavity – a hole in the tooth – cannot regrow and needs a filling or other restoration."
   },
   {
    "q": "Is nano-hydroxyapatite toothpaste as effective as fluoride toothpaste?",
    "a": "Several clinical studies have reported similar results for early enamel lesions, but the research base is smaller and still developing. It is a reasonable option for people who prefer to avoid fluoride, provided early lesions are monitored."
   },
   {
    "q": "How long does it take for white spots to improve?",
    "a": "Changes are gradual and are usually assessed over several months. Some white spots harden and stop progressing without fully fading in color, which still counts as a successful outcome."
   }
  ],
  "related": [
   "exams",
   "nutrition"
  ],
  "sources": [
   {
    "label": "NIDCR — Tooth Decay",
    "url": "https://www.nidcr.nih.gov/health-info/tooth-decay"
   }
  ],
  "approval": [
   "Confirm which remineralization products the practice recommends or applies (e.g. nano-hydroxyapatite, calcium phosphate products, xylitol)",
   "Clinician review of the fluoride-free framing and the comparative evidence statements",
   "Confirm whether the practice photographs lesions for monitoring"
  ]
 },
 "fillings": {
  "doc_title": "Dental Fillings: Repairing Decay & Worn Restorations",
  "meta": "How fillings repair cavities, chips and failing restorations, what tooth-colored materials involve, and how repair differs from elective amalgam removal.",
  "h1": "Dental fillings",
  "group": "Restorative dentistry",
  "summary": "Repairing cavities, chips and worn restorations with tooth-colored, mercury-free materials.",
  "keywords": "filling fillings cavity cavities tooth decay composite tooth colored white filling chipped tooth broken filling old filling replacement amalgam silver filling fillling",
  "layout": "standard",
  "lead": "A filling repairs a tooth that has lost structure to decay, a chip or a worn-out restoration, sealing the area so the tooth can chew and function comfortably again.",
  "overview": {
   "heading": "Repairing a tooth while keeping as much of it as possible",
   "lead": "Decay is gradual: acids made by mouth bacteria dissolve enamel until a cavity forms. A filling cleans out the damaged area and rebuilds it, restoring the tooth’s shape and bite and sealing it against further leakage.",
   "paras": [
    "The guiding idea is conservation. Removing only what is damaged and bonding material to the sound tooth around it helps preserve natural structure for the long term. Very early enamel changes, before a true cavity forms, can sometimes be monitored and supported with preventive care instead of drilled.",
    "Raina Dental Care uses mercury-free restorative materials, including tooth-colored composite resin for most small and medium repairs. Larger repairs may call for a ceramic inlay, onlay or crown."
   ]
  },
  "considered": {
   "heading": "When a filling may be considered",
   "items": [
    "A cavity found at an exam or on dental X-rays",
    "A small chip or fracture that leaves the tooth otherwise sound",
    "An older filling that is cracked, leaking or has decay forming at its edges"
   ]
  },
  "compare": {
   "heading": "Repair or elective replacement?",
   "intro": "Replacing a failing filling and removing an intact amalgam are different decisions.",
   "columns": [
    "",
    "Repairing a damaged restoration",
    "Elective amalgam replacement"
   ],
   "rows": [
    [
     "Why it happens",
     "Decay, fracture, leakage or wear found at an exam",
     "Personal preference while the filling is still intact"
    ],
    [
     "Clinical need",
     "Usually recommended to prevent further damage",
     "Not clinically required; an informed personal choice"
    ],
    [
     "Tooth structure",
     "Removes only decay and failing material",
     "Removing a sound filling also removes some healthy tooth"
    ],
    [
     "Protocol",
     "Standard restorative care",
     "Mercury-safe removal protocols apply, as described on the SMART page"
    ]
   ]
  },
  "steps": {
   "heading": "From exam to finished filling",
   "items": [
    {
     "title": "Find and confirm",
     "text": "An exam and, when needed, X-rays show the size and depth of the problem, and your dentist explains whether a filling, a larger restoration or monitoring fits."
    },
    {
     "title": "Numb and protect",
     "text": "Local anesthetic numbs the area. The tooth is isolated and kept dry, which helps bonded materials attach well."
    },
    {
     "title": "Remove and rebuild",
     "text": "Decay or failing material is removed, the tooth is prepared, and new material is placed and hardened in layers."
    },
    {
     "title": "Shape and check the bite",
     "text": "The filling is contoured and polished, and your bite is checked so the tooth meets its neighbors evenly."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Lifespan, limits and other options",
   "paras": [
    "No filling lasts forever. Its lifespan depends on size, material, bite, grinding habits and how well its edges are kept clean, and large fillings in back teeth are more likely to crack or leak.",
    "When too little tooth remains to hold a filling, an onlay or crown may protect it better, and decay that reaches the nerve may need root canal treatment first. Worsening sensitivity, throbbing pain or swelling after a filling deserves prompt review."
   ]
  },
  "callout": {
   "heading": "About intact amalgam fillings",
   "text": "The FDA does not recommend removing amalgam fillings that are in good condition with no decay beneath them, because removal sacrifices healthy tooth structure."
  },
  "faqs": [
   {
    "q": "Will a tooth-colored filling match my tooth exactly?",
    "a": "Composite resin comes in many shades and can be blended closely to surrounding enamel. Natural teeth vary in translucency, so the match is close rather than identical, and composite can stain gradually from coffee, tea or tobacco."
   },
   {
    "q": "Why does my tooth feel sensitive after a new filling?",
    "a": "Preparing and bonding a tooth can briefly irritate the nerve, especially with deeper repairs. Mild sensitivity usually settles within days to a few weeks. Pain that grows, lingers after cold or wakes you at night should be checked."
   },
   {
    "q": "Can a chipped tooth be fixed with a filling instead of a crown?",
    "a": "Often, yes. Bonded composite can rebuild a modest chip, particularly on front teeth. When a fracture takes off a cusp or much of the tooth, an onlay or crown usually protects it better."
   },
   {
    "q": "Should my old silver fillings be replaced?",
    "a": "A filling that is cracked, leaking or has decay around it needs repair or replacement as ordinary restorative care. An intact filling is a different matter: replacing it is a personal choice rather than a clinical need. Your dentist can examine each filling and explain which category it falls into."
   }
  ],
  "related": [
   "smart",
   "crowns"
  ],
  "sources": [
   {
    "label": "NIDCR — Tooth Decay",
    "url": "https://www.nidcr.nih.gov/health-info/tooth-decay"
   },
   {
    "label": "FDA — Information for Patients About Dental Amalgam Fillings",
    "url": "https://www.fda.gov/medical-devices/dental-amalgam-fillings/information-patients-about-dental-amalgam-fillings"
   }
  ],
  "approval": [
   "Confirm which tooth-colored restorative materials are offered (composite resin, glass ionomer, ceramic inlays/onlays) and whether ceramic restorations are made by an outside lab or in-office.",
   "Approve the statement “Raina Dental Care uses mercury-free restorative materials” for publication.",
   "Confirm whether early enamel lesions are monitored with non-drilling preventive approaches at the practice before linking this page to remineralization care."
  ]
 },
 "crowns": {
  "doc_title": "Crowns & Bridges: Protecting and Replacing Teeth",
  "meta": "A crown caps one damaged tooth; a bridge replaces a missing tooth using its neighbors for support. Compare the two, the visits involved and their care.",
  "h1": "Crowns and bridges",
  "group": "Restorative dentistry",
  "summary": "A crown caps a damaged tooth; a bridge spans a gap. How each works, the visits involved and daily care.",
  "keywords": "crown crowns cap tooth cap bridge fixed bridge missing tooth gap porcelain crown ceramic crown zirconia broken tooth cracked tooth crwon brige",
  "layout": "standard",
  "lead": "A crown is a custom cap that covers and protects one weakened tooth. A bridge replaces one or more missing teeth by anchoring a false tooth to the teeth on either side of the gap.",
  "overview": {
   "heading": "Two restorations, two different jobs",
   "lead": "Both are fixed restorations, cemented in place and made to fit your bite. A crown rebuilds a tooth you still have; a bridge fills a space where a tooth is gone.",
   "paras": [
    "A crown encloses the visible part of a tooth above the gumline. It is commonly used when a tooth is too broken down, cracked or heavily filled for a filling to hold, and it is often placed on back teeth after root canal treatment.",
    "A traditional bridge uses crowns on the neighboring teeth, called abutments, to hold a replacement tooth, called a pontic, in the gap. Because those neighbors must be reshaped, a bridge makes most sense when they already need restoration or when an implant is not suitable."
   ]
  },
  "considered": {
   "heading": "When a crown or bridge may be considered",
   "items": [
    "A tooth with a large, failing filling and little sound structure left",
    "A cracked tooth or a broken cusp",
    "A back tooth that has had root canal treatment",
    "A missing tooth whose neighbors are already heavily restored"
   ]
  },
  "compare": {
   "heading": "Crown or bridge?",
   "intro": "The quickest way to tell them apart: is the tooth still there?",
   "columns": [
    "",
    "Crown",
    "Bridge"
   ],
   "rows": [
    [
     "What it solves",
     "A damaged tooth you still have",
     "One or more missing teeth"
    ],
    [
     "How it is held",
     "Cemented over the prepared tooth itself",
     "Anchored to crowns on the neighboring teeth"
    ],
    [
     "Teeth involved",
     "One",
     "Usually three or more linked units"
    ],
    [
     "Effect on neighbors",
     "None",
     "Adjacent teeth are reshaped to support it"
    ],
    [
     "Daily cleaning",
     "Brush and floss like a natural tooth",
     "Thread floss or a small brush under the false tooth"
    ],
    [
     "Main alternatives",
     "Large filling or onlay; extraction if unrestorable",
     "Implant, removable partial denture or leaving the gap"
    ]
   ]
  },
  "steps": {
   "heading": "From consultation to final crown",
   "items": [
    {
     "title": "Evaluate the tooth",
     "text": "An exam and X-rays check the tooth, its root, the gums and, for a bridge, the supporting teeth. Material options are explained for that tooth’s position and load."
    },
    {
     "title": "Prepare and record",
     "text": "After numbing, the tooth is shaped to make room for the crown, and any decay or old filling is removed. An impression or scan records the shape so the restoration can be made to fit."
    },
    {
     "title": "Protect in between",
     "text": "In a conventional two-visit process, a temporary is worn while the final restoration is made. Avoid sticky foods on that side."
    },
    {
     "title": "Fit and adjust",
     "text": "The final restoration is tried in, its fit, color and bite are checked, and it is cemented or bonded in place."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Lifespan, risks and alternatives",
   "paras": [
    "Crowns and bridges can serve for many years, though none lasts indefinitely. Decay can start at the edge of the restoration, porcelain can chip, and a crowned tooth occasionally needs root canal treatment later. Grinding shortens service life.",
    "A bridge depends on its supporting teeth, so a problem in one can affect the whole bridge. An implant avoids involving the neighbors but requires surgery, adequate bone and more time; a removable partial denture is less invasive and less costly, but less stable."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "Does getting a crown hurt?",
    "a": "The tooth is numbed before it is shaped, so most people feel pressure rather than sharp pain. Tenderness for a few days is common; increasing sensitivity or an uneven bite should be checked."
   },
   {
    "q": "What are crowns made of?",
    "a": "Common materials include all-ceramic options such as zirconia and lithium disilicate, porcelain fused to metal, and gold alloys. Each balances appearance, strength and the amount of tooth that must be reshaped differently. Your dentist will explain which material suits a given tooth and why."
   },
   {
    "q": "Can a crown be placed on an implant?",
    "a": "Yes. An implant crown attaches to the implant through a connector called an abutment rather than being cemented over a natural tooth."
   },
   {
    "q": "How do I clean under a bridge?",
    "a": "Clean under the false tooth daily with a floss threader, bridge floss, an interdental brush or a water flosser. Decay of the supporting teeth is a common reason bridges fail."
   }
  ],
  "related": [
   "implants",
   "root-canals"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Crowns",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/crowns"
   },
   {
    "label": "ADA MouthHealthy — Bridges",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/bridges"
   }
  ],
  "approval": [
   "Confirm which crown and bridge materials the practice offers (e.g., zirconia, lithium disilicate, porcelain-fused-to-metal, gold) and that they align with the practice’s biological, mercury-free materials approach.",
   "Confirm the fabrication workflow: conventional impressions or digital scanning, outside lab or in-office milling, and use of temporary crowns. Do not publish same-day crowns unless confirmed."
  ]
 },
 "root-canals": {
  "doc_title": "Root Canal Treatment: What It Involves & Aftercare",
  "meta": "How root canal treatment saves an inflamed or infected tooth, the steps involved, why a crown often follows, and how it compares with extraction.",
  "h1": "Root canal treatment",
  "group": "Restorative dentistry",
  "summary": "How root canal treatment keeps an infected tooth, the steps, restoration afterward and alternatives.",
  "keywords": "root canal canals endodontic treatment endodontics infected tooth abscess nerve pulp toothache crown after rootcanal canel infection",
  "layout": "standard",
  "lead": "Root canal treatment removes inflamed or infected tissue from inside a tooth, cleans and seals the canals, and allows a tooth that might otherwise be extracted to be kept.",
  "overview": {
   "heading": "Keeping a tooth when its nerve is damaged",
   "lead": "Inside each tooth is the pulp, soft tissue containing nerves and blood vessels. Deep decay, a crack, repeated procedures or injury can inflame or infect it, and infection can then spread to the bone around the root.",
   "paras": [
    "Root canal treatment, also called endodontic therapy, clears out the damaged pulp and disinfects the root canals before filling and sealing them. The tooth stays in place, its root stays anchored in bone, and with a suitable restoration on top it continues to function.",
    "It is a common, well-studied procedure. Extraction, the main alternative, deserves a fair discussion too."
   ]
  },
  "considered": {
   "heading": "When root canal treatment may be considered",
   "items": [
    "Sensitivity to hot or cold that lingers after the trigger is gone",
    "Spontaneous or throbbing toothache, or pain when biting",
    "A pimple-like bump on the gum, or swelling near a tooth",
    "Signs of infection at the root tip on X-rays, sometimes without symptoms"
   ]
  },
  "compare": {
   "heading": "Root canal or extraction?",
   "intro": "Both resolve an infected tooth; they differ in what remains afterward.",
   "columns": [
    "",
    "Root canal treatment",
    "Extraction"
   ],
   "rows": [
    [
     "What happens",
     "Infected pulp removed; the tooth is kept",
     "The whole tooth is removed"
    ],
    [
     "Afterward",
     "Usually needs a crown or substantial filling",
     "Gap may need an implant, bridge or partial denture"
    ],
    [
     "When it may not fit",
     "Tooth is fractured, unrestorable or lacks bone support",
     "Tooth is restorable and worth keeping"
    ]
   ]
  },
  "steps": {
   "heading": "How a root canal is done",
   "items": [
    {
     "title": "Diagnose",
     "text": "Testing the tooth’s response to cold and tapping, along with X-rays, shows whether the pulp is inflamed or infected and whether the tooth can be restored."
    },
    {
     "title": "Numb and isolate",
     "text": "Local anesthetic numbs the area, and a thin rubber sheet called a dental dam keeps the tooth clean and dry."
    },
    {
     "title": "Clean and shape",
     "text": "Through a small opening, the pulp is removed and each canal is cleaned, shaped and disinfected, in one visit or two."
    },
    {
     "title": "Fill and seal",
     "text": "The canals are filled, commonly with gutta-percha (a rubber-like material) and a sealer, and the opening is closed with a temporary or final filling."
    },
    {
     "title": "Restore",
     "text": "A crown or bonded restoration protects the tooth; a treated tooth left unrestored is more likely to break or become reinfected."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Success, risks and alternatives",
   "paras": [
    "Most treated teeth heal and serve for many years, but outcomes depend on canal complexity, how well the tooth is sealed and restored, and gum and bone health. Occasionally a tooth needs retreatment, minor surgery at the root tip or later extraction.",
    "Some cases involve curved, calcified or extra canals, or redoing an earlier root canal. At your consultation, your dentist will explain which parts of treatment take place at the practice and whether care is coordinated with an endodontist, a root canal specialist.",
    "Extraction is a reasonable choice for a tooth that cannot be restored, but planning for replacement is part of that decision."
   ]
  },
  "callout": {
   "heading": "When to seek urgent care",
   "text": "Contact the practice for increasing pain or swelling after treatment. Facial or neck swelling, difficulty breathing or swallowing, or high fever with swelling needs emergency care: call 911 or go to an emergency room."
  },
  "faqs": [
   {
    "q": "Does a root canal hurt?",
    "a": "Treatment is done with local anesthetic, and many people find it similar to having a filling. Some soreness for a few days afterward is common."
   },
   {
    "q": "Why does a tooth need a crown after a root canal?",
    "a": "Removing the pulp leaves a tooth, especially a back tooth, more prone to fracture. A crown or bonded onlay covers and protects it; a front tooth that has lost little structure may only need a filling."
   },
   {
    "q": "Is root canal treatment safe?",
    "a": "Root canal treatment is a long-established, widely studied procedure that major dental organizations regard as a safe and effective way to keep an infected tooth. Your dentist can explain the materials used and how your general health is considered in planning."
   },
   {
    "q": "Can antibiotics replace a root canal?",
    "a": "Antibiotics can help control a spreading infection, but they cannot clear infected tissue from inside a tooth, so the source usually remains. When used, they accompany treatment rather than replace it."
   }
  ],
  "related": [
   "crowns",
   "extractions"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Root Canals",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/root-canals"
   }
  ],
  "approval": [
   "Confirm whether Dr. Raina and/or Dr. Prameela B perform root canal treatment at the practice, which cases (e.g., molars, retreatment, root-tip surgery) are referred to an endodontist, and how referral should be described.",
   "Approve the practice’s published position on root canal treatment (copy presents it as an established, appropriate option consistent with the biological approach) and confirm any specific filling or sealer materials used."
  ]
 },
 "periodontal": {
  "doc_title": "Periodontal Treatment: Gum Disease Care & Maintenance",
  "meta": "Gingivitis versus periodontitis, warning signs, scaling and root planing, and the maintenance that keeps gum disease under control over the long term.",
  "h1": "Periodontal treatment",
  "group": "Restorative dentistry",
  "summary": "Gingivitis versus periodontitis, deep cleaning, and the maintenance that keeps gum disease in check.",
  "keywords": "gum disease gingivitis periodontitis bleeding gums deep cleaning scaling root planing pockets receding loose teeth periodontist pyorrhea perio periodontial",
  "layout": "standard",
  "lead": "Periodontal treatment addresses infection and inflammation of the gums and the bone that supports teeth, from early, reversible gingivitis to periodontitis that needs deeper cleaning and ongoing maintenance.",
  "overview": {
   "heading": "Healthy gums keep teeth anchored",
   "lead": "Gum disease begins when plaque bacteria along the gumline trigger inflammation. Caught early, it can often be reversed; left alone, it can destroy the attachment and bone that hold teeth steady.",
   "paras": [
    "Gingivitis is the early stage. Gums look red or puffy and may bleed when you brush, but no bone has been lost, and better daily cleaning plus a professional cleaning can return them to health.",
    "Periodontitis is the advanced form. The gum pulls away from the tooth, forming pockets where bacteria collect below the gumline, and supporting bone breaks down. Lost bone usually does not grow back, so treatment aims to stop progression and keep the area stable. Smoking, diabetes, some medications, genetics and hormonal changes all raise the risk."
   ]
  },
  "considered": {
   "heading": "Signs worth having checked",
   "items": [
    "Gums that bleed during brushing or flossing",
    "Red, swollen or tender gums",
    "Persistent bad breath or a bad taste",
    "Gums that have pulled back, making teeth look longer",
    "Teeth that feel loose, or a bite that has shifted"
   ]
  },
  "compare": {
   "heading": "Gingivitis or periodontitis?",
   "intro": "The two stages differ in what has been damaged and what treatment can achieve.",
   "columns": [
    "",
    "Gingivitis",
    "Periodontitis"
   ],
   "rows": [
    [
     "What is affected",
     "Gum tissue only",
     "Gums, attachment fibers and supporting bone"
    ],
    [
     "Typical signs",
     "Redness, swelling, bleeding when brushing",
     "Deeper pockets, recession, loose teeth, bone loss on X-rays"
    ],
    [
     "Reversible?",
     "Usually, with improved cleaning",
     "Lost bone rarely returns; progression can be controlled"
    ],
    [
     "Usual treatment",
     "Professional cleaning and home-care changes",
     "Scaling and root planing, then periodontal maintenance"
    ]
   ]
  },
  "steps": {
   "heading": "From gum evaluation to long-term maintenance",
   "items": [
    {
     "title": "Measure and image",
     "text": "Pocket depths (the space between each tooth and its gum), bleeding and recession are recorded, and X-rays show bone levels. Health history, including diabetes and smoking, is reviewed."
    },
    {
     "title": "Deep cleaning",
     "text": "When periodontitis is present, scaling and root planing removes plaque and hardened tartar from below the gumline and smooths the roots so the gum can tighten around the tooth. It is usually done with local anesthetic, a section at a time."
    },
    {
     "title": "Reevaluate",
     "text": "Several weeks later, pockets are measured again to see how the tissue has responded. Areas that remain deep may need further care or referral to a periodontist, a specialist in gum and bone treatment."
    },
    {
     "title": "Maintain",
     "text": "Periodontal maintenance visits, often more frequent than routine cleanings, keep bacteria below the gumline in check. The interval is tailored to how your gums respond."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Limits, referral and the wider health picture",
   "paras": [
    "After deep cleaning, gums may be tender and teeth sensitive to cold for a while. Advanced bone loss, complex defects or disease that does not respond may call for surgical care from a periodontist.",
    "Research links periodontitis with conditions such as diabetes and heart disease. An association is not proof that one causes the other, and treating gum disease is not a treatment for those conditions. With diabetes the relationship appears to run both ways, so keeping both your physician and dentist informed is worthwhile."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "Why do my gums bleed if nothing hurts?",
    "a": "Gum disease often causes little or no discomfort until it is advanced, which makes bleeding an important early signal. Healthy gums do not usually bleed with gentle brushing. Bleeding that continues for more than a week or two deserves an exam."
   },
   {
    "q": "Is scaling and root planing the same as a regular cleaning?",
    "a": "No. A routine cleaning removes plaque and tartar at and just below the gumline around healthy teeth. Scaling and root planing reaches deeper into periodontal pockets and smooths the root surfaces, which is why it is typically done with local anesthetic and in sections."
   },
   {
    "q": "Will treating my gums improve my diabetes or heart health?",
    "a": "Some studies suggest treating gum disease may modestly improve blood sugar measures in people with diabetes, but results vary and it does not replace medical care. For heart disease, a link has been observed but not shown to be causal."
   },
   {
    "q": "When would I see a periodontist?",
    "a": "Referral may be suggested for advanced bone loss, pockets that stay deep after scaling and root planing, gum grafting needs or problems around implants. Maintenance is often shared between offices."
   }
  ],
  "related": [
   "exams",
   "oral-screening"
  ],
  "sources": [
   {
    "label": "NIDCR — Periodontal (Gum) Disease",
    "url": "https://www.nidcr.nih.gov/health-info/gum-disease"
   },
   {
    "label": "ADA MouthHealthy — Gum Disease",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/gum-disease"
   }
  ],
  "approval": [
   "Confirm that scaling and root planing and periodontal maintenance are performed at the practice, and by whom (dentist and/or hygienist).",
   "Confirm any adjunctive periodontal therapies offered (e.g., ozone, laser, locally applied antimicrobials) before mentioning them on this page.",
   "Confirm whether the practice has periodontist referral relationships or shared-maintenance arrangements, so the referral FAQ can be stated accurately."
  ]
 },
 "dentures": {
  "doc_title": "Dentures: Partial, Full & Implant-Supported Options",
  "meta": "Partial, full and implant-supported dentures compared: how each stays in, what fitting and adjustment involve, and how to care for a denture day to day.",
  "h1": "Dentures",
  "group": "Restorative dentistry",
  "summary": "Removable partial and full dentures, implant-supported options, and what fitting and adjustment involve.",
  "keywords": "dentures denture false teeth plate partial denture full denture complete denture implant supported overdenture snap in dentures denture reline loose dentures dentuers",
  "layout": "standard",
  "lead": "Dentures are custom replacement teeth for people missing several or all teeth. Partial dentures fill gaps among remaining teeth, full dentures replace an arch, and implant-supported versions attach to implants.",
  "overview": {
   "heading": "Replacing many teeth at once",
   "lead": "When several teeth are missing, a denture can restore chewing, support the lips and cheeks, and help with speech. The right type depends on how many healthy teeth remain, the condition of the gums and jawbone, and how much stability you need.",
   "paras": [
    "A removable partial denture clasps onto remaining teeth and fills the spaces between them. A full, or complete, denture rests on the gums and is held by suction and the shape of the ridge. Implant-supported dentures connect to a small number of implants and either snap on and off or are fixed in place.",
    "Adjusting to any denture takes practice. Speech and chewing improve over the first weeks, and several follow-up adjustments are normal; as gums and bone change, relines are needed over time."
   ]
  },
  "considered": {
   "heading": "When a denture may be considered",
   "items": [
    "Several missing teeth in one arch, where a bridge is not practical",
    "Remaining teeth that cannot be predictably saved",
    "A current denture that has become loose, worn or uncomfortable"
   ]
  },
  "compare": {
   "heading": "Partial, full or implant-supported?",
   "intro": "Each option trades stability, treatment time and cost differently.",
   "columns": [
    "",
    "Partial denture",
    "Full denture",
    "Implant-supported denture"
   ],
   "rows": [
    [
     "Suited to",
     "Some healthy teeth remain in the arch",
     "No teeth remain, or remaining teeth are unrestorable",
     "Full-arch replacement where stability is a priority"
    ],
    [
     "How it stays in",
     "Clasps or attachments on natural teeth",
     "Suction and fit against the gums",
     "Attachments to surgically placed implants"
    ],
    [
     "Surgery needed",
     "No",
     "No, unless teeth must be removed first",
     "Yes, implant placement and healing"
    ],
    [
     "Stability when chewing",
     "Moderate",
     "Varies; lower dentures are often less stable",
     "Generally higher than gum-supported dentures"
    ],
    [
     "Removal and cleaning",
     "Removed daily for cleaning",
     "Removed daily for cleaning",
     "Snap-in types removed; fixed types cleaned in place"
    ]
   ]
  },
  "steps": {
   "heading": "From first impressions to a settled fit",
   "items": [
    {
     "title": "Evaluate and plan",
     "text": "The exam reviews remaining teeth, gum health, the jaw ridges and any existing denture, and plans any treatment needed first."
    },
    {
     "title": "Record your mouth",
     "text": "Impressions and bite records capture the shape of your gums and how your jaws meet. Tooth shade, shape and position are chosen with you."
    },
    {
     "title": "Try in",
     "text": "Many dentures are tried in as a wax setup before final processing, so fit, appearance and speech can be checked and changed."
    },
    {
     "title": "Deliver and adjust",
     "text": "The finished denture is fitted, and sore spots are relieved over follow-up visits. Small adjustments in the first weeks are expected."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Limits, upkeep and alternatives",
   "paras": [
    "Dentures restore function but do not chew with the force of natural teeth, and some foods remain harder to manage. Because the jawbone gradually shrinks where teeth are missing, gum-supported dentures need periodic relines and eventual replacement.",
    "Clean a removable denture daily with a soft brush and non-abrasive cleaner, keep it moist when out, and remove it overnight unless advised otherwise. Clasps can trap plaque, so clean remaining teeth carefully.",
    "Alternatives include a fixed bridge for smaller gaps, individual implants or a fixed full-arch implant bridge. Implant options require surgery and adequate bone and cost more, so they are not the right fit for everyone."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "How long does it take to get used to dentures?",
    "a": "Many people settle in over several weeks, though it varies widely. Lower full dentures usually take longest because the tongue and cheeks move them. Patience, practice and follow-up adjustments make a real difference."
   },
   {
    "q": "What is an immediate denture?",
    "a": "An immediate denture is made in advance and placed the same day remaining teeth are removed, so you are not without teeth while healing. As the gums shrink over the following months, it usually needs relines or a final denture."
   },
   {
    "q": "Will dentures change how I speak?",
    "a": "Some sounds, especially “s” and “f,” can feel different at first. Reading aloud and speaking slowly help the tongue adapt. Ongoing clicking or whistling can signal a fit issue worth adjusting."
   },
   {
    "q": "Can my current denture be converted to snap onto implants?",
    "a": "Sometimes. A denture in good condition may be modified to attach to implants, while others are better remade. An evaluation of the denture, the jawbone and your health determines whether implants are an option."
   }
  ],
  "related": [
   "implants",
   "all-on-4"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Dentures",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/dentures"
   }
  ],
  "approval": [
   "Confirm which denture types the practice provides (partial, full, immediate, implant-supported) and whether partial denture frameworks (metal, flexible, acrylic) align with the biological materials approach.",
   "Confirm whether try-ins, relines and repairs are handled at the practice or through an outside lab, and the usual number of fitting visits."
  ]
 },
 "implants": {
  "doc_title": "Dental Implants: Planning, Placement & Care",
  "meta": "How dental implants replace missing teeth: the post, abutment and crown, who is a candidate, and the staged process from consultation to long-term care.",
  "h1": "Dental implants",
  "group": "Implants & oral surgery",
  "summary": "How implants replace missing teeth: the parts, candidacy, the staged process and long-term care.",
  "keywords": "dental implant implants tooth missing replacement post screw abutment crown titanium ceramic bone graft vs bridge osseointegration implnat",
  "layout": "cornerstone",
  "lead": "A dental implant replaces a missing tooth root with a small post set in the jawbone, which then supports a crown, bridge or denture. Treatment happens in stages over several months and begins with a careful evaluation.",
  "overview": {
   "heading": "What a missing tooth changes, and how an implant responds",
   "lead": "A missing tooth affects more than appearance. Neighboring teeth can tip into the space, the opposing tooth can drift, and the jawbone where the root used to be gradually shrinks because chewing no longer stimulates it.",
   "paras": [
    "An implant replaces the root as well as the visible tooth. It has three parts: the implant post, a screw-shaped fixture placed in the jawbone that bone grows against over time; the abutment, the connector between implant and crown; and the crown, the visible tooth made to match your others.",
    "Because it stands on its own, an implant does not rely on reshaping neighboring teeth the way a traditional bridge does. It is also more involved: it requires surgery, healing time, enough healthy bone and a commitment to long-term maintenance.",
    "Implants can replace one tooth, support a bridge or anchor a denture. Fixed full-arch treatment is covered on the All-on-4 page."
   ]
  },
  "considered": {
   "heading": "When an implant may be considered",
   "items": [
    "One or more missing teeth next to healthy teeth you would rather not reshape",
    "A tooth that cannot be saved and is planned for removal",
    "Enough jawbone at the site, or bone that can be rebuilt",
    "Healthy gums and general health conditions that are well controlled"
   ]
  },
  "compare": {
   "heading": "Implant, bridge or removable partial?",
   "intro": "All three replace missing teeth; they differ in how they are supported and what they ask of you.",
   "columns": [
    "",
    "Implant",
    "Bridge",
    "Removable partial denture"
   ],
   "rows": [
    [
     "Supported by",
     "A post in the jawbone",
     "Crowns on neighboring teeth",
     "Clasps on teeth and the gums"
    ],
    [
     "Neighboring teeth",
     "Not reshaped",
     "Reshaped to hold crowns",
     "Clasps rest on them; little reshaping"
    ],
    [
     "Surgery",
     "Yes",
     "No",
     "No"
    ],
    [
     "Typical timeline",
     "Several months, in stages",
     "A few weeks",
     "A few weeks"
    ],
    [
     "Bone at the gap",
     "Loads the bone, which may help limit shrinkage",
     "Continues to shrink under the false tooth",
     "Continues to shrink"
    ],
    [
     "Daily care",
     "Brush and clean around it like a tooth",
     "Clean under the false tooth",
     "Remove and clean daily"
    ]
   ]
  },
  "steps": {
   "heading": "From consultation to a finished implant tooth",
   "items": [
    {
     "title": "Consultation",
     "text": "Your dentist reviews your health history, medications and goals, examines the gums and bite, and explains whether an implant is a reasonable option compared with a bridge or denture."
    },
    {
     "title": "Planning",
     "text": "X-rays and often three-dimensional imaging show bone height, width and nearby structures such as nerves and sinuses. If bone is thin, grafting may be planned before or during placement; many patients do not need it."
    },
    {
     "title": "Placement",
     "text": "With local anesthetic, the implant post is placed in the jawbone. Some cases receive a temporary tooth soon after; others heal first with the gum covering or surrounding the implant."
    },
    {
     "title": "Healing",
     "text": "Over a period that commonly runs a few months, bone bonds to the implant surface, a process called osseointegration. Smoking and some health conditions can slow or disrupt it."
    },
    {
     "title": "Restoration and maintenance",
     "text": "Once the implant is stable, the abutment and crown are attached and the bite is refined. Regular cleanings and checks keep the gum and bone around the implant healthy for the long term."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Candidacy, risks and long-term care",
   "paras": [
    "Implants are well established, with high reported success rates, but they are not risk-free. Possible complications include infection, nerve injury causing numbness, sinus involvement with upper implants, and an implant that fails to integrate. Peri-implantitis, an infection of the gum and bone around an implant, can develop without good maintenance.",
    "Some factors are evaluated carefully because they can affect healing: smoking, uncontrolled diabetes, past radiation to the jaw, certain bone medications, untreated gum disease and heavy grinding. These do not automatically rule implants out, but they may mean more preparation, a different plan or a different option. Jaw growth also needs to be complete, so implants are generally not placed in children and young teens.",
    "An implant crown can chip or loosen and may need repair or replacement over the years. Daily cleaning around the implant and regular professional maintenance are the most reliable ways to protect it."
   ]
  },
  "callout": {
   "heading": "Bone grafting is not a given",
   "text": "A graft rebuilds bone where it has thinned, often after a tooth has been missing for some time, but many implant sites have enough bone without one. Imaging at the planning stage shows whether your site would benefit."
  },
  "faqs": [
   {
    "q": "Is getting an implant painful?",
    "a": "Placement is done with local anesthetic, so most people feel pressure rather than pain during the procedure. Soreness and swelling afterward are common for several days and are usually managed with over-the-counter or prescribed medication taken as directed. Pain that worsens after the first few days should be reported."
   },
   {
    "q": "How long does healing take?",
    "a": "Bone usually needs a few months to bond with the implant, so the full process often spans several months. Grafting or an extraction at the same site can extend it, and your plan will include an estimated timeline."
   },
   {
    "q": "How do I care for an implant?",
    "a": "Brush twice daily and clean around the implant every day with floss, an interdental brush or a water flosser. Implants cannot decay, but the surrounding gum and bone can become inflamed. Regular professional maintenance lets early problems be caught and treated."
   },
   {
    "q": "Can I have an implant if I smoke or have diabetes?",
    "a": "Possibly. Smoking and poorly controlled diabetes are associated with slower healing and higher rates of implant problems, so they are weighed carefully during evaluation. Stopping smoking and achieving good blood sugar control can improve the outlook, and your dentist may coordinate with your physician."
   },
   {
    "q": "Is an implant better than a bridge?",
    "a": "Neither is better for everyone. An implant leaves neighboring teeth untouched and helps maintain bone, but it requires surgery and more time. A bridge is faster, avoids surgery, and can make sense when the neighboring teeth already need crowns."
   }
  ],
  "related": [
   "all-on-4",
   "crowns"
  ],
  "sources": [
   {
    "label": "FDA — Dental Implants: What You Should Know",
    "url": "https://www.fda.gov/medical-devices/dental-devices/dental-implants-what-you-should-know"
   },
   {
    "label": "ADA MouthHealthy — Implants",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/implants"
   }
  ],
  "approval": [
   "Confirm which implant phases are performed at the practice (surgical placement, bone grafting, restoration) and by which dentist, and which are referred to a specialist.",
   "Confirm implant materials offered (titanium, zirconia/ceramic) in line with the biological approach before naming them on the page.",
   "Confirm whether 3D cone-beam (CBCT) imaging is available at the practice or obtained by referral.",
   "Confirm whether sedation is offered for implant surgery, which methods, and the credentialed provider for each.",
   "Confirm whether financing or membership discounts apply to implant treatment before referencing them."
  ]
 },
 "all-on-4": {
  "doc_title": "All-on-4 Full-Arch Implants: Fixed Teeth Explained",
  "meta": "How a fixed full-arch implant bridge works, who may be evaluated, temporary versus final teeth, and how it compares with overdentures and dentures.",
  "h1": "All-on-4 and full-arch implants",
  "group": "Implants & oral surgery",
  "summary": "A fixed full-arch bridge on a small number of implants: who is evaluated, the stages and how it compares.",
  "keywords": "all on 4 all-on-four allon4 full arch implants full mouth implants fixed dentures implant bridge hybrid denture fixed denture implant supported teeth all on four",
  "layout": "cornerstone",
  "lead": "“All-on-4” describes a treatment concept in which a full arch of fixed replacement teeth is supported by a small number of implants – often four, sometimes more – rather than one implant per tooth.",
  "overview": {
   "heading": "A fixed arch of teeth on a few well-placed implants",
   "lead": "For people who have lost most or all teeth in an arch, or whose remaining teeth cannot be saved, a full-arch implant bridge offers a fixed alternative to a removable denture. The teeth are screwed to the implants and are removed only by the dental team.",
   "paras": [
    "The concept relies on strategic placement. Implants toward the back of the jaw are often angled to make use of available bone and to avoid structures such as the sinuses and the lower jaw nerve. That can reduce the need for grafting in some patients, but it does not eliminate it, and the right number of implants depends on bone quality, bite forces and the arch involved.",
    "This is a more extensive treatment than replacing a single tooth. It may involve removing remaining teeth, placing several implants in one surgery, wearing a temporary bridge during healing and then receiving a final prosthesis months later."
   ]
  },
  "considered": {
   "heading": "Who may be evaluated for a full-arch bridge",
   "items": [
    "Most or all teeth in an arch are missing or failing",
    "A removable denture is loose, uncomfortable or hard to tolerate",
    "Enough bone in key areas, or a plan to address bone limitations",
    "General health conditions, including diabetes, are well controlled",
    "Willingness to commit to daily cleaning and regular maintenance visits"
   ]
  },
  "compare": {
   "heading": "Fixed bridge, overdenture or conventional denture?",
   "intro": "All three replace a full arch; they differ in stability, removability, upkeep and cost.",
   "columns": [
    "",
    "Fixed full-arch implant bridge",
    "Implant-retained overdenture",
    "Conventional denture"
   ],
   "rows": [
    [
     "Held by",
     "Screwed to several implants",
     "Snaps onto two or more implants",
     "Suction and fit on the gums"
    ],
    [
     "Removable at home",
     "No; removed only by the dental team",
     "Yes, daily for cleaning",
     "Yes, daily for cleaning"
    ],
    [
     "Upper palate coverage",
     "Usually none",
     "Often reduced",
     "Usually covers the palate"
    ],
    [
     "Surgery",
     "Yes; several implants, often in one procedure",
     "Yes; usually fewer implants",
     "No, unless teeth must be removed"
    ],
    [
     "Cleaning",
     "Around and under the bridge daily, plus professional maintenance",
     "Denture and attachments cleaned daily",
     "Denture cleaned daily"
    ],
    [
     "Relative cost",
     "Highest",
     "Moderate",
     "Lowest"
    ]
   ]
  },
  "steps": {
   "heading": "From evaluation to a final fixed arch",
   "items": [
    {
     "title": "Evaluation and imaging",
     "text": "Health history, remaining teeth, gums, bite and lip support are assessed, and imaging shows the volume and position of bone. Together these determine whether a fixed bridge is feasible and how many implants the plan needs."
    },
    {
     "title": "Surgery",
     "text": "Any failing teeth are removed and the implants are placed. When the implants are stable enough, a temporary fixed bridge may be attached the same day or soon after; when they are not, a removable denture may be worn during healing."
    },
    {
     "title": "Healing with temporary teeth",
     "text": "Over several months the implants integrate with the bone. The temporary bridge is lighter and less durable, so a soft diet is followed early on."
    },
    {
     "title": "Final prosthesis",
     "text": "Once healing is confirmed, new records are taken and a stronger final bridge is made and fitted, with the bite carefully refined."
    },
    {
     "title": "Maintenance",
     "text": "Regular visits allow the team to remove the bridge periodically to clean it and inspect the implants, screws and gums."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Limits, risks and long-term upkeep",
   "paras": [
    "Risks include those of any implant surgery – infection, nerve or sinus complications and implants that fail to integrate – across several sites. If an implant is lost, the bridge may need modification or an additional implant. Smoking, uncontrolled diabetes, heavy grinding and limited bone raise the risk of complications.",
    "Prosthetic upkeep is part of the commitment. Teeth on the bridge wear and can chip, screws can loosen, and the bridge itself generally needs repair or replacement over the years. Food collects beneath it, so a water flosser or special brushes are used daily.",
    "Some patients are better served by an implant-retained overdenture, which costs less and is easier to clean, or by a conventional denture when surgery is not advisable."
   ]
  },
  "callout": {
   "heading": "About “teeth in a day”",
   "text": "Some patients leave surgery with a temporary fixed bridge, but this depends on how firmly the implants anchor in bone and is not possible for everyone. The final bridge is made after healing is complete."
  },
  "faqs": [
   {
    "q": "Does All-on-4 mean exactly four implants?",
    "a": "Not necessarily. Four is common, particularly in the lower jaw, but softer bone, a larger arch or heavy bite forces may call for five, six or more. The number is set by the evaluation, not by the name."
   },
   {
    "q": "Will I need a bone graft?",
    "a": "Angled placement can sometimes avoid a graft by using bone that is already available. Some patients still need grafting or another approach, and some are not candidates for a fixed bridge at all. Examination and imaging determine which applies."
   },
   {
    "q": "How is the temporary bridge different from the final one?",
    "a": "The temporary bridge protects the healing implants and gives you fixed teeth in the meantime; it is lighter and less durable. The final bridge is made after the implants integrate, typically with stronger materials and a refined fit, shape and bite."
   },
   {
    "q": "How do I clean a fixed full-arch bridge?",
    "a": "Brush the teeth and gumline twice daily, and clean underneath the bridge every day with a water flosser, interdental brushes or special floss. Professional maintenance periodically includes removing the bridge to clean and check the implants."
   },
   {
    "q": "Is a fixed bridge a better choice than an implant overdenture?",
    "a": "It depends on priorities. A fixed bridge stays in and does not cover the palate, while an overdenture costs less, comes out for cleaning and may suit people with less bone or limited hand dexterity. Many patients weigh stability, budget and upkeep together."
   }
  ],
  "related": [
   "implants",
   "dentures"
  ],
  "sources": [
   {
    "label": "FDA — Dental Implants: What You Should Know",
    "url": "https://www.fda.gov/medical-devices/dental-devices/dental-implants-what-you-should-know"
   },
   {
    "label": "ADA MouthHealthy — Dentures",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/dentures"
   }
  ],
  "approval": [
   "Confirm whether full-arch implant treatment is provided at the practice, which phases (extractions, implant surgery, temporary and final prosthesis) are in-house versus referred, and the responsible clinician.",
   "Confirm whether same-day temporary fixed bridges are offered and under what clinical conditions.",
   "Confirm whether CBCT imaging is available at the practice before referencing 3D imaging specifically.",
   "Confirm sedation options for full-arch surgery and the credentialed provider for each.",
   "Confirm use of the name “All-on-4” (a registered trademark of Nobel Biocare) versus the generic “full-arch implant bridge,” and the implant and prosthesis materials offered.",
   "Confirm financing options before referencing them on this page."
  ]
 },
 "extractions": {
  "doc_title": "Tooth Extractions: Simple, Surgical & Aftercare",
  "meta": "Why a tooth may need removal, how simple and surgical extractions differ, socket care, dry socket warning signs and options for replacing the tooth.",
  "h1": "Tooth extractions",
  "group": "Implants & oral surgery",
  "summary": "Why a tooth may need removal, simple versus surgical extraction, aftercare and dry socket warning signs.",
  "keywords": "tooth extraction extractions pull a removal pulled wisdom dry socket broken surgical extration teeth",
  "layout": "standard",
  "lead": "An extraction removes a tooth that cannot be predictably saved or is causing problems for the teeth around it. Careful planning and aftercare protect healing and keep replacement options open.",
  "overview": {
   "heading": "When removing a tooth is the right step",
   "lead": "Keeping natural teeth is the default goal, so extraction is recommended after other options have been weighed. When a tooth is badly broken, severely infected, loosened by gum disease or blocking other teeth, removal may be the most predictable path.",
   "paras": [
    "Before deciding, your dentist will discuss whether a filling, crown or root canal treatment could reasonably save the tooth.",
    "If a tooth is removed, replacement is worth discussing before the procedure. An implant, bridge or partial denture may be suggested depending on the tooth’s location and your bite, and timing can affect which options remain open."
   ]
  },
  "considered": {
   "heading": "Reasons an extraction may be considered",
   "items": [
    "Decay or fracture too extensive to restore",
    "Infection that cannot be resolved with root canal treatment",
    "Teeth loosened by advanced periodontal disease",
    "Wisdom teeth that are impacted or repeatedly inflamed"
   ]
  },
  "compare": {
   "heading": "Simple or surgical extraction?",
   "intro": "The approach depends on whether the tooth is fully visible and how its roots are shaped.",
   "columns": [
    "",
    "Simple extraction",
    "Surgical extraction"
   ],
   "rows": [
    [
     "Tooth position",
     "Fully erupted and visible in the mouth",
     "Broken at the gumline, impacted or partly erupted"
    ],
    [
     "Technique",
     "Loosened and lifted out with instruments",
     "Gum opened; bone or tooth may be sectioned"
    ],
    [
     "Anesthesia",
     "Local anesthetic",
     "Local anesthetic; sedation may be considered"
    ],
    [
     "Stitches",
     "Sometimes",
     "Often"
    ],
    [
     "Typical recovery",
     "A few days of tenderness",
     "Several days to about a week of swelling"
    ]
   ]
  },
  "steps": {
   "heading": "What happens at an extraction visit",
   "items": [
    {
     "title": "Review and imaging",
     "text": "X-rays show the roots and surrounding bone. Your health history, including blood thinners, bone medications and heart conditions, is reviewed."
    },
    {
     "title": "Numbing",
     "text": "Local anesthetic numbs the tooth, gum and bone. You will feel pressure as the tooth is loosened but should not feel sharp pain; tell your dentist if you do."
    },
    {
     "title": "Removal",
     "text": "The tooth is gently loosened and removed, or divided into sections for a surgical extraction. The socket is cleaned and stitches are placed if needed."
    },
    {
     "title": "Clot and instructions",
     "text": "You bite on gauze to help a blood clot form, and you leave with written aftercare instructions."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Bleeding, dry socket and what comes next",
   "paras": [
    "Firm, steady pressure on gauze usually controls bleeding; bleeding that keeps soaking through gauze after an hour of pressure should be reported promptly. For at least 24 hours, protect the clot by avoiding smoking, straws, spitting and vigorous rinsing, and eat soft foods.",
    "Dry socket happens when the blood clot is dislodged or dissolves early, leaving bone exposed. Warning signs include pain that worsens a few days after the extraction instead of easing, often spreading toward the ear, a bad taste or odor, and a socket that looks empty. It is treatable, so contact the practice if these appear.",
    "Other possible complications include infection, temporary numbness when lower teeth lie near a nerve, and sinus involvement with upper back teeth. Once healing is complete, replacement options can be planned."
   ]
  },
  "callout": {
   "heading": "When it is an emergency",
   "text": "Uncontrolled bleeding, swelling that affects breathing or swallowing, or high fever with facial swelling needs emergency care. Call 911 or go to an emergency room."
  },
  "faqs": [
   {
    "q": "What can I eat after an extraction?",
    "a": "Wait until numbness wears off so you do not bite your cheek or tongue. For the first day or two, soft, lukewarm foods such as yogurt, eggs and soup are easiest; chew on the other side."
   },
   {
    "q": "When can I smoke or use a straw again?",
    "a": "Suction and smoke can dislodge the clot and raise the risk of dry socket, so avoid both for at least 24 hours and longer where possible. Smoking also slows healing generally."
   },
   {
    "q": "Does an extracted tooth need to be replaced?",
    "a": "It depends on the tooth and your bite. Gaps toward the front or in the main chewing area are commonly replaced with an implant, bridge or partial denture; wisdom teeth usually are not."
   },
   {
    "q": "Can an implant be placed at the same visit as the extraction?",
    "a": "Sometimes. Immediate placement depends on infection, the bone around the socket and the tooth’s position. Often the socket heals first, sometimes with a graft to help preserve bone, before an implant is placed."
   }
  ],
  "related": [
   "oral-surgery",
   "implants"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Extractions",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/extractions"
   },
   {
    "label": "ADA MouthHealthy — Dry Socket",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/dry-socket"
   }
  ],
  "approval": [
   "Confirm which extractions are performed at the practice (simple, surgical, wisdom teeth) and which are referred to an oral and maxillofacial surgeon.",
   "Confirm whether the STA Wand (computer-controlled local anesthetic delivery) is still in use before mentioning it; do not describe any technique as needle-free or painless.",
   "Confirm whether same-day or walk-in extraction visits are available before publishing any availability statement.",
   "Confirm whether socket preservation grafting is offered at the practice."
  ]
 },
 "oral-surgery": {
  "doc_title": "Oral Surgery: Surgical Care and Specialist Referral",
  "meta": "Which surgical procedures may be handled in general dentistry, when an oral and maxillofacial surgeon is involved, and what recovery involves.",
  "h1": "Oral surgery",
  "group": "Implants & oral surgery",
  "summary": "Surgical care within general dentistry, when an oral surgeon is involved, and recovery basics.",
  "keywords": "oral surgery oral surgeon tooth removal wisdom teeth surgical extraction implant surgery bone graft biopsy maxillofacial surgeon referral mouth surgery surgury",
  "layout": "standard",
  "lead": "Oral surgery covers procedures on the teeth, gums and jaw that go beyond fillings and cleanings. Some are commonly performed by general dentists; others call for an oral and maxillofacial surgeon.",
  "overview": {
   "heading": "Surgical care, matched to the right clinician",
   "lead": "At Raina Dental Care, surgical care is provided within the scope of general dentistry. An oral and maxillofacial surgeon is a dental specialist with several additional years of hospital-based surgical training.",
   "paras": [
    "Within general dentistry, surgical care can include routine and some surgical tooth removal and treatment connected to implants. At your consultation, your dentist will explain which steps take place at the practice and whether any part is coordinated with a specialist.",
    "Referral is not a lesser outcome. It matches the complexity of a procedure, the anesthesia it needs and your medical history with the clinician equipped for it."
   ]
  },
  "considered": {
   "heading": "Procedures that fall under oral surgery",
   "items": [
    "Removal of teeth that are broken, decayed beyond repair or crowded",
    "Wisdom tooth removal, particularly impacted teeth",
    "Implant placement and related bone grafting",
    "Biopsy of an unusual area of tissue",
    "Jaw surgery, facial injuries and complex infections, which are specialist care"
   ]
  },
  "compare": {
   "heading": "General dentist or oral surgeon?",
   "intro": "Who performs a procedure depends on its complexity and the care it requires.",
   "columns": [
    "",
    "Surgical care in general dentistry",
    "Oral and maxillofacial surgeon"
   ],
   "rows": [
    [
     "Training",
     "Dental degree; surgical skills within general practice",
     "Dental degree plus multi-year hospital surgical residency"
    ],
    [
     "Typical procedures",
     "Routine and some surgical extractions; selected implant procedures",
     "Impacted teeth, complex grafting, jaw and facial surgery"
    ],
    [
     "Anesthesia",
     "Local anesthetic; other options depend on permits",
     "Local, sedation or general anesthesia, per training and permits"
    ],
    [
     "Typical cases",
     "Straightforward cases in generally healthy patients",
     "Complex anatomy, medical complexity or deeper anesthesia needs"
    ]
   ]
  },
  "steps": {
   "heading": "How a surgical procedure is planned",
   "items": [
    {
     "title": "Assessment",
     "text": "An exam and X-rays, sometimes with 3D imaging, show the site, roots and nearby nerves and sinuses. Medications, including blood thinners, are reviewed."
    },
    {
     "title": "Choosing who and how",
     "text": "Your dentist explains the procedure, the anesthesia, the expected recovery and whether referral to a specialist is advisable."
    },
    {
     "title": "Preparation",
     "text": "You receive instructions about eating, medications and transportation where relevant, and questions are answered before the day."
    },
    {
     "title": "Recovery and follow-up",
     "text": "Written aftercare guides the first days. A follow-up visit checks healing and plans any next steps, such as tooth replacement."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Recovery, risks and when to call",
   "paras": [
    "Swelling, mild bleeding and soreness are normal for a few days after most procedures and usually improve steadily. Cold compresses, rest, soft foods and medication as directed help; smoking and vigorous rinsing slow healing.",
    "Contact the practice if pain worsens after the third or fourth day, bleeding does not slow with firm pressure, numbness persists well after the anesthetic should have worn off, or you develop a fever or a persistent bad taste.",
    "Every surgical procedure carries risks, including infection, nerve irritation and, for upper back teeth, sinus involvement. These are reviewed before consent, along with alternatives."
   ]
  },
  "callout": {
   "heading": "Emergency warning signs",
   "text": "Swelling that spreads toward the eye, jaw or neck, difficulty breathing or swallowing, uncontrolled bleeding, a serious facial injury, or high fever with swelling needs emergency care. Call 911 or go to an emergency room."
  },
  "faqs": [
   {
    "q": "Is an oral surgeon different from my dentist?",
    "a": "Yes. Oral and maxillofacial surgery is a separate dental specialty that requires several years of additional hospital-based training. The dentists at Raina Dental Care provide surgical care within general dentistry and refer cases that call for a specialist."
   },
   {
    "q": "Will I be asleep for oral surgery?",
    "a": "Many procedures are done comfortably with local anesthetic alone. Sedation and general anesthesia require specific training and state permits, and deeper anesthesia is provided by a clinician who holds the appropriate permit."
   },
   {
    "q": "Why might wisdom tooth removal be referred?",
    "a": "Wisdom teeth that are impacted, sit close to the nerve in the lower jaw or lie near the sinus can be more complex to remove. Referral helps match the procedure and anesthesia to that complexity. Fully erupted wisdom teeth with simple roots may be manageable in general practice."
   },
   {
    "q": "How long is recovery after oral surgery?",
    "a": "Many people resume normal routines within a few days after a straightforward procedure; surgical extractions and implant procedures can take a week or more to settle. Bone and gum keep healing beneath the surface for weeks to months."
   }
  ],
  "related": [
   "extractions",
   "sedation"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Extractions",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/extractions"
   },
   {
    "label": "ADA MouthHealthy — Wisdom Teeth",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/wisdom-teeth"
   }
  ],
  "approval": [
   "Confirm the surgical procedures each dentist performs at the practice (simple extractions, surgical extractions, wisdom teeth, implant placement, grafting, biopsy) and which are routinely referred.",
   "Confirm that neither dentist holds oral and maxillofacial surgery specialty status, and approve the wording “surgical care is provided within the scope of general dentistry.”",
   "Confirm any sedation permits held and the sedation methods offered for surgical procedures, with the credentialed provider for each.",
   "Confirm whether 3D cone-beam (CBCT) imaging is available at the practice or by referral."
  ]
 },
 "whitening": {
  "doc_title": "Teeth Whitening: In-Office vs At-Home Trays",
  "meta": "Compare in-office whitening with dentist-supervised take-home trays, learn why crowns and fillings don’t whiten, and how sensitivity is managed.",
  "h1": "Teeth whitening",
  "group": "Cosmetic & orthodontic care",
  "summary": "In-office and dentist-supervised at-home whitening compared, with sensitivity and restoration limits.",
  "keywords": "teeth whitening tooth bleaching whiten white yellow stains stained trays take-home in-office zoom opalescence whitning bleach",
  "layout": "standard",
  "lead": "Professional whitening lightens natural teeth with peroxide gel, either in an office visit or with custom trays you wear at home under your dentist’s supervision. Results vary from person to person, and existing crowns, veneers and fillings will not change color.",
  "overview": {
   "heading": "A brighter shade, planned around your teeth",
   "lead": "Whitening works well on yellowish and age-related staining. A short evaluation first helps predict how your teeth are likely to respond and whether any visible restorations would end up mismatched.",
   "paras": [
    "Peroxide-based gels break down stain molecules within the enamel and dentin – the layer beneath enamel. Stains from coffee, tea, red wine and tobacco often respond well. Brownish teeth respond less, and gray discoloration from certain medications or a past injury may barely change; those cases are often better addressed with bonding or veneers.",
    "Because whitening affects only natural tooth structure, timing matters if you are planning new crowns or fillings on front teeth. Whitening first lets your dentist match new restorations to your lighter shade."
   ]
  },
  "considered": {
   "heading": "When whitening may be considered",
   "items": [
    "General yellowing or dullness of natural teeth",
    "Surface staining from coffee, tea, wine or tobacco",
    "Before new front-tooth restorations, to set the shade",
    "Healthy teeth and gums with no untreated decay"
   ]
  },
  "compare": {
   "heading": "In-office or at-home trays?",
   "intro": "Both use peroxide gel; they differ mainly in strength, speed and convenience.",
   "columns": [
    "",
    "In-office whitening",
    "Dentist-supervised at-home trays"
   ],
   "rows": [
    [
     "Where",
     "At the dental office, with gums shielded",
     "At home, using custom-fitted trays"
    ],
    [
     "Gel strength",
     "Higher concentration, applied by the dental team",
     "Lower concentration that you apply yourself"
    ],
    [
     "Time to result",
     "Noticeable change after one longer visit",
     "Gradual change over one to several weeks"
    ],
    [
     "Sensitivity",
     "Can be stronger for a day or two",
     "Often milder; wear time can be shortened or paused"
    ],
    [
     "Touch-ups",
     "Usually repeated with another office visit",
     "Keep trays for occasional top-ups with fresh gel"
    ]
   ]
  },
  "steps": {
   "heading": "From shade check to touch-up",
   "items": [
    {
     "title": "Evaluation",
     "text": "Your dentist checks for decay, gum recession, worn enamel and existing restorations, and records your starting shade. Cavities and gum problems are treated before whitening begins."
    },
    {
     "title": "Choosing a method",
     "text": "You and your dentist weigh in-office against at-home whitening based on your timeline and past sensitivity."
    },
    {
     "title": "Whitening",
     "text": "In the office, gel is applied in timed cycles while the gums are protected. At home, you wear custom trays with a small amount of gel for the prescribed time each day."
    },
    {
     "title": "Review and upkeep",
     "text": "A follow-up shade check shows how your teeth responded. Results fade gradually, so occasional touch-ups can be planned rather than repeating full treatment."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Sensitivity, limits and alternatives",
   "paras": [
    "Temporary tooth sensitivity and gum irritation are the most common side effects. They usually settle within days; a toothpaste for sensitive teeth, shorter wear times or a pause between sessions can help. Overusing whitening products or wearing poorly fitting trays can irritate the gums.",
    "Whitening is usually postponed during pregnancy or breastfeeding as a precaution, and it is not started while decay or gum disease is untreated. No one can promise a specific number of shades: the outcome depends on your starting color, the type of stain and your enamel.",
    "If teeth do not lighten enough, or restorations would look noticeably different, alternatives include bonding, veneers or replacing older restorations after whitening."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "How long do whitening results last?",
    "a": "Results commonly last from several months to a few years, depending on diet, smoking and oral hygiene. Coffee, tea, red wine and tobacco bring staining back faster. Periodic touch-ups with trays can extend results without starting over."
   },
   {
    "q": "Will whitening change my crowns or veneers?",
    "a": "No. Porcelain, ceramic and composite restorations keep their original color. If a crown or filling on a front tooth no longer matches after whitening, it may need replacing to blend in."
   },
   {
    "q": "Are store-bought kits the same as professional whitening?",
    "a": "Over-the-counter strips and gels generally contain lower peroxide levels and use one-size strips or trays, so contact with teeth and gums is less controlled. A dental evaluation first can catch cavities, recession or restorations that would affect your result or comfort."
   },
   {
    "q": "Why do teeth feel sensitive during whitening?",
    "a": "Peroxide can pass through enamel into the dentin and temporarily irritate the tooth’s nerve. The feeling is usually short-lived and fades after treatment ends. Mentioning it early lets your dentist adjust gel strength or wear time."
   }
  ],
  "related": [
   "veneers",
   "exams"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Teeth Whitening",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/teeth-whitening"
   }
  ],
  "approval": [
   "Confirm which whitening options are currently offered: in-office, dentist-supervised take-home trays, or both",
   "Confirm product brands in use (legacy site named Zoom for in-office and Opalescence for take-home) before naming any brand on the page",
   "Confirm whether whitening is included or discounted under the adult membership plan",
   "Confirm typical in-office appointment length if the practice wants it published"
  ]
 },
 "veneers": {
  "doc_title": "Veneers: Porcelain, Composite & Alternatives",
  "meta": "What porcelain and composite veneers can change, why tooth preparation is usually irreversible, and when whitening, bonding or braces may suit better.",
  "h1": "Veneers",
  "group": "Cosmetic & orthodontic care",
  "summary": "Porcelain and composite veneers explained: tooth preparation, upkeep and more conservative alternatives.",
  "keywords": "veneers porcelain veneers composite veneers laminates veneer teeth chipped teeth gaps discolored teeth smile makeover venners vaneers cosmetic dentistry",
  "layout": "standard",
  "lead": "Veneers are thin, tooth-colored coverings bonded to the front of teeth to change their shape, color or proportions. Because most require removing some enamel, they are a considered, long-term commitment rather than a quick fix.",
  "overview": {
   "heading": "Changing shape and shade where other options fall short",
   "lead": "A veneer covers the visible surface of a tooth, so it can mask concerns whitening cannot reach, such as small chips, uneven edges or deep discoloration. Careful planning and patient selection matter as much as the material.",
   "paras": [
    "Porcelain veneers are thin ceramic shells made to fit each tooth, usually by a dental laboratory; they resist staining and reflect light much like enamel. Composite veneers are built from tooth-colored resin, the material used for bonding, and shaped directly on the tooth.",
    "Veneers are not required for every cosmetic concern. Whitening, small bonding repairs or orthodontic alignment often address the same goals while keeping more natural tooth structure."
   ]
  },
  "considered": {
   "heading": "When veneers may be considered",
   "items": [
    "Small chips or worn, uneven edges on front teeth",
    "Discoloration that does not respond to whitening",
    "Minor gaps, or teeth that are small or irregularly shaped",
    "Mild misalignment when orthodontic treatment is not preferred",
    "Healthy teeth and gums, with any decay or gum disease treated first"
   ]
  },
  "compare": {
   "heading": "Porcelain or composite?",
   "intro": "Each material involves trade-offs in durability, upkeep and how much tooth is changed.",
   "columns": [
    "",
    "Porcelain veneers",
    "Composite veneers"
   ],
   "rows": [
    [
     "Material",
     "Thin ceramic shell, usually made by a lab",
     "Tooth-colored resin, shaped and bonded on the tooth"
    ],
    [
     "Tooth preparation",
     "Usually removes a thin layer of enamel",
     "Often needs less enamel removal, sometimes none"
    ],
    [
     "Staining",
     "Highly stain-resistant",
     "Can stain and lose polish over time"
    ],
    [
     "Repairs",
     "A chip usually means replacing the veneer",
     "Small chips can often be repaired directly"
    ],
    [
     "Typical lifespan",
     "Often 10 years or more with good care",
     "Often several years before refinishing or replacement"
    ]
   ]
  },
  "steps": {
   "heading": "From smile planning to bonding",
   "items": [
    {
     "title": "Consultation and planning",
     "text": "Your dentist reviews your goals, bite, gum health and any grinding habits, and records the starting point with photographs and impressions or scans."
    },
    {
     "title": "Shade and material",
     "text": "You choose a shade that suits your face and neighboring teeth – whitening, if planned, comes first – and a material suited to the changes needed and your bite."
    },
    {
     "title": "Preparation",
     "text": "For porcelain, a thin layer of enamel is usually removed so the veneer sits flush, and temporaries may be worn while the laboratory makes the veneers. Composite veneers are often placed in one visit."
    },
    {
     "title": "Bonding and review",
     "text": "Each veneer is checked for fit and color, bonded and hardened with a curing light, and the bite is adjusted. A follow-up visit checks the gums and bite."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Irreversibility, risks and alternatives",
   "paras": [
    "Once enamel is removed, the tooth will need a veneer or other restoration from then on – this cannot be undone. Veneers can chip, come loose or show an edge if gums recede, and teeth may be sensitive for a while. Veneers do not prevent decay, so hygiene and checkups still matter.",
    "People who clench or grind may need a night guard, and active gum disease, significant decay or thin enamel can make someone a poor candidate. Crowding or a heavy bite sometimes calls for orthodontics first.",
    "Alternatives include whitening for color, bonding for small chips and gaps, orthodontics for crowding or spacing, and crowns for heavily filled or weakened teeth."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "Do veneers ruin your natural teeth?",
    "a": "Preparation removes a thin layer of enamel, typically a fraction of a millimeter, so the tooth will need a covering from then on. Done conservatively on a healthy tooth, the underlying structure remains strong, and composite or minimal-preparation designs remove less."
   },
   {
    "q": "Can veneers be whitened later?",
    "a": "No. Porcelain and composite veneers do not respond to whitening gel, so any whitening of natural teeth is done before the veneer shade is chosen."
   },
   {
    "q": "What is the difference between a veneer and a crown?",
    "a": "A veneer covers only the front surface of a tooth and is mainly cosmetic. A crown covers the whole tooth and is used when a tooth is cracked, heavily filled or weakened, which means removing more tooth structure."
   },
   {
    "q": "How do I care for veneers?",
    "a": "Brush and floss as usual, keep regular cleanings and avoid biting hard objects, opening packages or chewing ice with your front teeth. A night guard is often recommended for people who grind."
   }
  ],
  "related": [
   "whitening",
   "crowns"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Veneers",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/veneers"
   }
  ],
  "approval": [
   "Confirm whether porcelain veneers, composite veneers or both are currently offered",
   "Confirm whether porcelain veneers are fabricated by an outside dental laboratory and whether temporary veneers are provided",
   "Confirm whether digital smile previews or trial mock-ups are offered before mentioning them",
   "Any before/after gallery requires documented patient consent and genuine, unaltered cases"
  ]
 },
 "aligners": {
  "doc_title": "Braces & Clear Aligners: Options, Timelines & Retainers",
  "meta": "How fixed braces and removable clear aligners compare, what an orthodontic evaluation involves, and why retainers matter after teeth move.",
  "h1": "Braces & clear aligners",
  "group": "Cosmetic & orthodontic care",
  "summary": "Fixed braces and removable clear aligners compared: evaluation, daily wear, hygiene, timelines and retainers.",
  "keywords": "braces clear aligners invisible invisalign invisaline straighten teeth crooked crowding gaps overbite underbite crossbite retainer orthodontics orthodontic adult teen",
  "layout": "standard",
  "lead": "Braces and clear aligners both move teeth with steady, gentle pressure over months. The better fit depends on your bite, the movements needed and how consistently you will wear removable trays.",
  "overview": {
   "heading": "Straighter teeth that are easier to clean and bite with",
   "lead": "Orthodontic treatment can address crowding, gaps and bite problems such as overbite, underbite or crossbite. Well-aligned teeth can also be easier to clean, and a balanced bite spreads chewing forces more evenly.",
   "paras": [
    "Conventional braces use brackets bonded to the teeth and a wire that is adjusted over time. Clear aligners are a series of removable, custom-made plastic trays, each moving the teeth a small step further. Invisalign, a trademark of Align Technology, is one widely known aligner brand; this page describes aligners in general.",
    "Orthodontic care may be provided by a general dentist or by an orthodontist – a dentist with specialty training in tooth movement and jaw growth. At your consultation, your dentist will explain which steps take place at the practice and whether any part is coordinated with an orthodontist."
   ]
  },
  "considered": {
   "heading": "When orthodontic treatment may be considered",
   "items": [
    "Crowded or overlapping teeth that are hard to clean",
    "Gaps between teeth",
    "Overbite, underbite, crossbite or open bite",
    "Teeth that have shifted since earlier treatment",
    "Alignment needed before an implant, crown or other restorative work"
   ]
  },
  "compare": {
   "heading": "Braces or clear aligners?",
   "intro": "Both can work well; they differ mainly in control, visibility and daily habits.",
   "columns": [
    "",
    "Fixed braces",
    "Clear aligners"
   ],
   "rows": [
    [
     "How they attach",
     "Brackets bonded to teeth, connected by a wire",
     "Removable plastic trays, sometimes with small tooth-colored attachments"
    ],
    [
     "Visibility",
     "Visible, though tooth-colored brackets are an option",
     "Less noticeable while worn"
    ],
    [
     "Daily wear",
     "Working around the clock; you cannot remove them",
     "Effective only when worn, typically about 20–22 hours a day"
    ],
    [
     "Eating",
     "Avoid hard or sticky foods that can break brackets",
     "Remove trays to eat; brush before putting them back"
    ],
    [
     "Complex movements",
     "Suited to a wide range of bite corrections",
     "Suited to many cases; some complex movements favor braces"
    ]
   ]
  },
  "steps": {
   "heading": "From records to retainers",
   "items": [
    {
     "title": "Evaluation and records",
     "text": "Your dentist examines your teeth, gums and bite, treats any decay or gum disease first, and takes records such as photographs, X-rays and impressions or scans."
    },
    {
     "title": "Treatment plan",
     "text": "You review the movements needed, which appliance suits them and a realistic time range – often one to three years, though it varies widely."
    },
    {
     "title": "Active treatment",
     "text": "Braces are adjusted at regular visits; aligner patients change trays on a set schedule and come in for progress checks. Elastics or small attachments may guide specific movements."
    },
    {
     "title": "Retention",
     "text": "Once teeth reach their planned positions, a retainer – removable or a thin bonded wire – holds them there."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Limits, risks and keeping your result",
   "paras": [
    "Teeth often feel sore for a few days after an adjustment or new trays. Food trapped around brackets or under trays can cause decay, white spots and gum inflammation, so careful hygiene matters. Root shortening and gum recession are less common risks your dentist watches for.",
    "Timelines depend on biology and cooperation: aligners left out for long stretches slow progress, and some bite problems involving jaw growth or position may need an orthodontist or, occasionally, jaw surgery. Minor cosmetic concerns can sometimes be handled with bonding or veneers instead."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "Am I too old for braces or aligners?",
    "a": "There is no upper age limit if the teeth and gums are healthy. Adult treatment can take longer, and existing crowns, bone loss or gum recession shape the plan. Gum disease needs to be controlled before teeth are moved."
   },
   {
    "q": "At what age should a child have an orthodontic check?",
    "a": "The American Association of Orthodontists recommends a first orthodontic check by about age 7, when developing bite problems can be spotted. Most children do not need treatment that early, but the check helps time care well."
   },
   {
    "q": "Can I eat and drink with aligners in?",
    "a": "Plain water is fine. Remove trays for meals and other drinks, since food and sugary or colored drinks trapped under the plastic stain trays and raise decay risk."
   },
   {
    "q": "How long will I need to wear a retainer?",
    "a": "Teeth can shift throughout life, so most people are advised to wear a retainer long term, usually at night after a period of fuller-time wear. Skipping it is a common reason straightened teeth move again."
   }
  ],
  "related": [
   "veneers",
   "pediatric"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Braces",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/braces"
   },
   {
    "label": "ADA MouthHealthy — Orthodontics",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/orthodontics"
   }
  ],
  "approval": [
   "Confirm whether clear aligner treatment is provided at the practice and under which system; confirm Invisalign provider status before naming the brand as offered (current copy mentions it only as an example brand)",
   "Confirm whether conventional braces are provided at the practice or referred to an orthodontist, and name referral partners only if approved",
   "Confirm which dentist provides orthodontic care and their relevant training; do not describe any clinician as an orthodontist without verified specialty credentials",
   "Confirm retainer types offered (removable, bonded) and any retainer replacement policy",
   "Confirm whether children’s orthodontic evaluations are provided in-house or referred"
  ]
 },
 "sedation": {
  "doc_title": "Sedation & Comfort Options for Dental Care",
  "meta": "How minimal and moderate dental sedation differ, how screening and preparation work, and non-drug ways to feel more at ease in the dental chair.",
  "h1": "Sedation & comfort options",
  "group": "Comfort & additional care",
  "summary": "Types of dental sedation compared, with health screening, preparation and non-drug comfort strategies.",
  "keywords": "sedation dentistry sleep laughing gas nitrous oxide oral IV conscious dental anxiety fear of dentist nervous patient gag reflex sedaton",
  "layout": "cornerstone",
  "lead": "Dental sedation uses medication to help you feel calmer during treatment, from light relaxation with nitrous oxide to deeper moderate sedation given by mouth or IV. It works alongside local anesthetic, which numbs the area, and is chosen after a review of your health and the procedure.",
  "overview": {
   "heading": "Making treatment manageable when anxiety gets in the way",
   "lead": "Dental anxiety is common and can lead people to postpone care until small problems grow. Comfort options, with or without medication, aim to make needed treatment achievable alongside careful technique and honest communication.",
   "paras": [
    "Sedation and anesthesia are different tools. Local anesthetic blocks feeling in one area of the mouth, while sedation changes how relaxed and aware you are; you may still notice pressure or movement. General anesthesia, in which you are fully unconscious, is a separate level of care usually provided by an anesthesia specialist.",
    "The descriptions below explain the types of dental sedation in general terms. At your consultation, your dentist will explain which methods are available for your treatment, who provides them and whether any part of your care is coordinated with another provider."
   ]
  },
  "considered": {
   "heading": "When sedation may be considered",
   "items": [
    "Anxiety or fear that has made dental visits difficult",
    "A strong gag reflex",
    "Longer or more involved procedures, such as some extractions",
    "Difficulty staying still or keeping the mouth open for long periods",
    "Past visits where local anesthetic alone was not enough"
   ]
  },
  "compare": {
   "heading": "Types of dental sedation",
   "intro": "Sedation is described by depth; the right level depends on your health, the procedure and the provider’s training and permits.",
   "columns": [
    "Level",
    "How it is given",
    "How you may feel",
    "Escort needed"
   ],
   "rows": [
    [
     "Minimal – nitrous oxide",
     "Breathed with oxygen through a small nose mask",
     "Relaxed and aware; effects fade within minutes of stopping",
     "Often not needed; your dentist will advise"
    ],
    [
     "Minimal to moderate – oral",
     "A prescribed pill taken before or at the visit",
     "Drowsy and calm; memory of the visit may be hazy",
     "Yes – an adult to drive you home"
    ],
    [
     "Moderate – IV",
     "Medication through a small needle in the arm or hand",
     "Deeply relaxed but responsive to voice; often little memory",
     "Yes – an adult to take you home"
    ]
   ]
  },
  "steps": {
   "heading": "Planning a sedated visit",
   "items": [
    {
     "title": "Health review",
     "text": "Your dentist reviews your medical history, medications and supplements, allergies, breathing problems including sleep apnea, heart and lung conditions, and pregnancy. Some conditions or medications rule out certain types of sedation or call for input from your physician."
    },
    {
     "title": "Choosing a level",
     "text": "The level is matched to your anxiety, the procedure and your health – generally the lightest level that allows treatment to be done safely and comfortably."
    },
    {
     "title": "Preparation",
     "text": "You receive written instructions before the visit. For oral or IV sedation these usually cover fasting, which regular medications to take or pause, comfortable clothing and arranging an adult escort; your dentist will specify what applies to you."
    },
    {
     "title": "Monitoring",
     "text": "Breathing, oxygen levels and other vital signs are monitored throughout, and local anesthetic is still used to numb the treatment area – sedation does not replace it."
    }
   ]
  },
  "expect": {
   "heading": "On the day of a sedated visit",
   "items": [
    {
     "label": "Before",
     "text": "Follow fasting and medication instructions exactly, and report any cold, illness or medication change since your health review. Bring your escort if one is required."
    },
    {
     "label": "During",
     "text": "You may feel warm, tingly, light or drowsy, and can usually still respond to questions and simple requests."
    },
    {
     "label": "After",
     "text": "Grogginess can last several hours after oral or IV sedation. Avoid driving, alcohol, machinery and important decisions for the rest of the day or as instructed, and have someone stay with you for a while."
    }
   ]
  },
  "considerations": {
   "heading": "Safety, limits and who may need another approach",
   "paras": [
    "Sedation is generally safe when patients are carefully screened and monitored, but it carries risks, including nausea, headache, prolonged drowsiness and, rarely, breathing problems or allergic reactions. Sedation can become deeper than intended, which is why provider training, monitoring equipment and emergency preparedness matter.",
    "People with some breathing, heart or liver conditions, untreated sleep apnea, certain medication combinations or pregnancy may need a different approach or medical clearance. Nitrous oxide may not suit someone with a blocked nose or certain ear or sinus conditions.",
    "Sedation eases anxiety and awareness, but it does not mean you will feel nothing; some people still notice pressure during treatment or mild soreness afterward."
   ]
  },
  "callout": {
   "heading": "Comfort without medication",
   "text": "Many people manage anxiety without medication: a hand signal to pause, hearing each step before it happens, shorter appointments, headphones and music, and slow breathing. These work on their own or alongside sedation."
  },
  "faqs": [
   {
    "q": "Will I be asleep during sedation?",
    "a": "Not with minimal or moderate sedation. You keep breathing on your own and can respond to voice, even if you feel very drowsy and remember little afterward. Being fully unconscious is general anesthesia, a different level of care."
   },
   {
    "q": "Is nitrous oxide used for children?",
    "a": "Nitrous oxide is widely used in pediatric dentistry and is generally considered safe when given and monitored by trained staff. A child’s health history, ability to breathe through the nose and willingness to wear the mask all affect whether it is suitable."
   },
   {
    "q": "Can I drive myself home after sedation?",
    "a": "After oral or IV sedation, no – you need a responsible adult to take you home, and you should not drive for the rest of the day or as instructed. After nitrous oxide alone, many people can drive once the gas has cleared and they feel normal, and your dentist will confirm this before you leave."
   },
   {
    "q": "Why do I need to stop eating before some types of sedation?",
    "a": "Sedation relaxes protective reflexes, so an empty stomach lowers the chance of inhaling stomach contents if you become nauseated. Fasting rules differ by type of sedation and by person, so follow the specific instructions you are given rather than general advice."
   }
  ],
  "related": [
   "oral-surgery",
   "extractions"
  ],
  "sources": [
   {
    "label": "ADA MouthHealthy — Anesthesia and Sedation",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/anesthesia-and-sedation"
   }
  ],
  "approval": [
   "Confirm which sedation methods are currently offered (nitrous oxide, oral, IV) and the credentialed provider for each, including Illinois sedation permit status",
   "Confirm whether IV sedation is provided in-house, by a visiting anesthesia provider or by referral; if it is not currently available, the page must not imply it is offered",
   "Confirm whether sedation is offered for children and at which levels",
   "Confirm the practice’s written pre- and post-sedation instructions (fasting, medications, escort) so the page’s general guidance matches them",
   "Confirm which procedures sedation is typically offered for"
  ]
 },
 "pain-management": {
  "doc_title": "Tooth, Jaw & TMJ Pain Evaluation",
  "meta": "How tooth, jaw and TMJ pain is evaluated in a dental office, common conservative first steps, when referral is needed and which symptoms are an emergency.",
  "h1": "Tooth & jaw pain care",
  "group": "Comfort & additional care",
  "summary": "Evaluation of tooth, jaw and TMJ pain, with conservative first steps and clear referral boundaries.",
  "keywords": "pain management tooth pain toothache jaw pain TMJ TMD jaw clicking facial pain headache grinding clenching orofacial pain tmj pain jaw ache bruxism",
  "layout": "standard",
  "lead": "Pain in the teeth, jaw or face can come from a tooth, the gums, the jaw joints and chewing muscles, or from outside the mouth. A dental evaluation aims to find the likely cause, treat what is dental and refer what is not.",
  "overview": {
   "heading": "Finding where the pain is coming from",
   "lead": "A toothache, aching jaw muscles and pain near the ear can feel alike. Finding the source comes first, because a cracked tooth and a strained jaw joint need very different care.",
   "paras": [
    "Temporomandibular disorders (TMD) – problems with the jaw joints and chewing muscles – often improve with time and conservative care. Experts recommend reversible steps first, avoiding treatments that irreversibly change the teeth, bite or joints unless clearly needed."
   ]
  },
  "considered": {
   "heading": "When an evaluation may help",
   "items": [
    "Toothache, or pain when biting or with hot and cold",
    "Jaw pain, clicking or limited opening",
    "Morning jaw soreness or headaches linked to clenching"
   ]
  },
  "compare": null,
  "steps": {
   "heading": "How a pain visit is structured",
   "items": [
    {
     "title": "History and examination",
     "text": "Your dentist asks when the pain started and what triggers it, then examines the teeth, gums, jaw joints and chewing muscles, with X-rays where helpful."
    },
    {
     "title": "Treating dental causes",
     "text": "Decay, a cracked tooth, gum infection or an inflamed nerve is treated with the appropriate dental care."
    },
    {
     "title": "Conservative jaw care",
     "text": "Muscle or joint pain may first be managed with soft foods, heat or cold, gentle stretching and sometimes a night guard."
    },
    {
     "title": "Referral when needed",
     "text": "Nerve-type pain, pain that does not fit a dental pattern or complex jaw disorders may be referred to a physician, orofacial pain specialist, oral surgeon or physical therapist."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "What this care does and does not cover",
   "paras": [
    "This care focuses on pain of dental and jaw origin. It does not cover chronic pain elsewhere in the body or long-term prescription pain medication."
   ]
  },
  "callout": {
   "heading": "When pain is an emergency",
   "text": "Facial swelling affecting breathing or swallowing, uncontrolled bleeding, serious facial injury, high fever with swelling, or jaw pain with chest pressure or shortness of breath needs immediate care – call 911 or go to an emergency room. Severe tooth pain without those signs should be seen promptly: (630) 381-4021."
  },
  "faqs": [
   {
    "q": "Can a dentist help with TMJ pain?",
    "a": "Dentists commonly evaluate jaw joint and muscle pain and can provide conservative care, including an oral appliance where appropriate. Persistent or complex cases are often managed with a physician, physical therapist or orofacial pain specialist."
   },
   {
    "q": "Why does my tooth hurt when nothing looks wrong?",
    "a": "Pain can come from a crack, an inflamed nerve, gum problems or clenching, or be referred from the sinuses or jaw muscles. Examination and targeted tests narrow the cause first."
   },
   {
    "q": "Will I need a night guard?",
    "a": "Not necessarily. A night guard can protect teeth and ease muscle strain in people who grind or clench, but it is one option among several conservative steps."
   }
  ],
  "related": [
   "emergency",
   "exams"
  ],
  "sources": [
   {
    "label": "NIH NIDCR — TMD (Temporomandibular Disorders)",
    "url": "https://www.nidcr.nih.gov/health-info/tmd"
   },
   {
    "label": "ADA MouthHealthy — Temporomandibular Joints (TMJ)",
    "url": "https://www.mouthhealthy.org/all-topics-a-z/tmj"
   }
  ],
  "approval": [
   "Confirm what ‘pain management’ means at the practice (dental pain, TMJ/orofacial pain, or another service); if it is not a distinct service, merge into emergency or exams and redirect",
   "Confirm which evaluations and treatments are provided (e.g., occlusal guards) and the responsible clinician",
   "Confirm referral partners (orofacial pain specialist, oral surgeon, physical therapist, physician) before naming any",
   "Confirm the practice does not provide chronic pain prescribing, and remove legacy ‘demo chat’ wording from the live page"
  ]
 },
 "sleep-apnea": {
  "doc_title": "Sleep Apnea & Oral Appliance Therapy",
  "meta": "Sleep apnea is diagnosed by a physician through a sleep study. Learn how a dentist-made oral appliance may help some diagnosed adults with medical care.",
  "h1": "Sleep apnea & oral appliances",
  "group": "Comfort & additional care",
  "summary": "A dentist’s possible role in sleep apnea: oral appliances for diagnosed patients, with physician care.",
  "keywords": "sleep apnea obstructive OSA snoring snore mouthpiece oral appliance mandibular advancement device CPAP alternative apnoea apena cpap",
  "layout": "standard",
  "lead": "Sleep apnea is a medical condition diagnosed by a physician or sleep specialist through a sleep study. For some diagnosed patients, a dentist can provide a custom oral appliance that helps keep the airway open during sleep, in coordination with the physician managing their care.",
  "overview": {
   "heading": "Dental support for a medically diagnosed condition",
   "lead": "In obstructive sleep apnea, the airway repeatedly narrows or closes during sleep, interrupting breathing. Untreated, it is linked to daytime sleepiness and high blood pressure, so diagnosis and follow-up belong with a physician.",
   "paras": [
    "Positive airway pressure (PAP), such as CPAP, remains a primary therapy. Oral appliance therapy – a custom mouthpiece that holds the lower jaw slightly forward – may suit some adults with diagnosed obstructive sleep apnea, such as milder cases or people who cannot tolerate PAP, when their physician agrees."
   ]
  },
  "considered": {
   "heading": "Who may discuss an oral appliance",
   "items": [
    "Adults with obstructive sleep apnea confirmed by a sleep study",
    "People who cannot tolerate PAP, with their physician’s input",
    "Patients with enough healthy teeth to anchor an appliance"
   ]
  },
  "compare": null,
  "steps": {
   "heading": "How dental and medical care fit together",
   "items": [
    {
     "title": "Medical diagnosis",
     "text": "A physician or sleep specialist evaluates symptoms and orders a sleep study, at home or in a sleep lab, to confirm the diagnosis and its severity."
    },
    {
     "title": "Dental evaluation",
     "text": "With the physician’s referral, the dentist checks the teeth, gums, jaw joints and bite to see whether an appliance is suitable."
    },
    {
     "title": "Fitting and adjustment",
     "text": "A custom appliance is made from impressions or scans and adjusted gradually."
    },
    {
     "title": "Follow-up testing",
     "text": "The physician typically confirms results with follow-up testing, while the dentist monitors the bite, jaw and appliance."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Limits and side effects",
   "paras": [
    "Oral appliances do not work for everyone and are generally less effective than PAP for severe sleep apnea. Side effects can include jaw soreness, excess saliva or dry mouth, tooth discomfort and gradual bite changes, which is why ongoing dental follow-up matters."
   ]
  },
  "callout": {
   "heading": "Keep your physician involved",
   "text": "Do not stop or change prescribed PAP therapy without your physician. Loud snoring with breathing pauses, gasping in sleep or severe daytime sleepiness should be evaluated medically."
  },
  "faqs": [
   {
    "q": "Can a dentist diagnose sleep apnea?",
    "a": "No. A dentist may notice possible signs, such as worn teeth from grinding, and suggest you speak with your physician, but diagnosis requires a medical evaluation and a sleep study."
   },
   {
    "q": "Is a sleep apnea appliance the same as a store-bought snoring guard?",
    "a": "No. A sleep apnea appliance is custom-made, adjustable and fitted after a medical diagnosis. Over-the-counter snoring devices can quiet snoring while sleep apnea continues untreated."
   },
   {
    "q": "Will I need another sleep study after getting an appliance?",
    "a": "Usually, yes. Follow-up testing arranged by your physician shows whether the appliance is controlling your breathing, which you cannot judge reliably by how you feel."
   }
  ],
  "related": [
   "exams",
   "approach"
  ],
  "sources": [
   {
    "label": "NIH NHLBI — What Is Sleep Apnea?",
    "url": "https://www.nhlbi.nih.gov/health/sleep-apnea"
   },
   {
    "label": "NIH NHLBI — Sleep Apnea Treatment",
    "url": "https://www.nhlbi.nih.gov/health/sleep-apnea/treatment"
   }
  ],
  "approval": [
   "Confirm whether the practice currently provides oral appliance therapy for diagnosed obstructive sleep apnea; if not, keep this page unpublished",
   "Confirm which dentist provides the service and any relevant dental sleep medicine training",
   "Confirm how physician referral, prescription and follow-up sleep testing are coordinated",
   "Confirm whether snoring-only appliances are offered and what medical screening is required first"
  ]
 },
 "dermal-fillers": {
  "doc_title": "Dermal Fillers: Cosmetic Injectables & Risks",
  "meta": "What dermal fillers are, how they differ from dental treatment, the common and rare risks the FDA describes, and why a licensed, trained injector matters.",
  "h1": "Dermal fillers",
  "group": "Comfort & additional care",
  "summary": "Cosmetic injectable fillers: purpose, licensed-clinician care, risks and how they differ from dentistry.",
  "keywords": "dermal fillers lip fillers facial fillers hyaluronic acid filler wrinkles smile lines nasolabial folds injectables cosmetic injections fillars",
  "layout": "standard",
  "lead": "Dermal fillers are cosmetic injectable gels placed under the skin to add volume or soften lines, such as the folds around the mouth or the lips. They are a cosmetic procedure distinct from dental treatment and should be performed only by a licensed, trained clinician.",
  "overview": {
   "heading": "A cosmetic option, distinct from dental care",
   "lead": "Fillers are medical devices regulated by the FDA, and each approved product is approved for specific areas and uses. Most common fillers are made from hyaluronic acid, a substance found naturally in the body, and results are temporary.",
   "paras": [
    "Fillers do not change the teeth, bite or gums, and they do not replace dental treatment. Some people consider them alongside cosmetic dental work, but each is a separate decision."
   ]
  },
  "considered": {
   "heading": "When fillers may be considered",
   "items": [
    "Adults seeking softer smile lines or folds around the mouth",
    "Lip volume or contour changes within approved uses",
    "Realistic expectations about temporary results"
   ]
  },
  "compare": null,
  "steps": {
   "heading": "From consultation to follow-up",
   "items": [
    {
     "title": "Consultation",
     "text": "The clinician reviews your goals, medical history, medications, allergies and prior cosmetic treatments, and explains the product, its approved uses and its risks."
    },
    {
     "title": "Treatment",
     "text": "The skin is cleaned and filler is injected in small amounts, often with a numbing agent in the product or applied to the skin."
    },
    {
     "title": "Follow-up",
     "text": "Swelling and bruising are reviewed, and small adjustments may be planned once they settle."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Risks and who should wait",
   "paras": [
    "Bruising, swelling, redness and tenderness are common and usually resolve within days to weeks. The most serious risk is accidental injection into a blood vessel, which can block blood flow and lead to skin damage, vision loss or stroke; it is rare, which is why anatomy training and immediate response matter.",
    "Fillers may not be appropriate during pregnancy or breastfeeding, or with an active infection or cold sore in the area. Needle-free filler devices are not FDA-approved, and fillers bought online should never be self-injected."
   ]
  },
  "callout": {
   "heading": "Symptoms that need urgent care",
   "text": "After a filler injection, vision changes, severe pain, skin that turns pale or dusky, or signs of stroke need immediate care – call 911 or go to an emergency room."
  },
  "faqs": [
   {
    "q": "Are fillers the same as wrinkle-relaxing injections?",
    "a": "No. Fillers add volume beneath the skin, while botulinum toxin injections relax specific muscles to soften expression lines. They are different products with different risks."
   },
   {
    "q": "How long do fillers last?",
    "a": "It depends on the product, the area treated and how quickly your body breaks it down. Many hyaluronic acid fillers last from several months to about a year or longer."
   },
   {
    "q": "Can hyaluronic acid filler be dissolved?",
    "a": "Often, yes, using an enzyme called hyaluronidase if results are uneven or a complication occurs. Other filler types cannot be reversed this way, which is one reason product choice matters."
   }
  ],
  "related": [
   "veneers",
   "whitening"
  ],
  "sources": [
   {
    "label": "FDA — Dermal Fillers (Soft Tissue Fillers)",
    "url": "https://www.fda.gov/medical-devices/aesthetic-cosmetic-devices/dermal-fillers-soft-tissue-fillers"
   },
   {
    "label": "FDA — FDA-Approved Dermal Fillers",
    "url": "https://www.fda.gov/medical-devices/aesthetic-cosmetic-devices/dermal-fillers-approved-center-devices-and-radiological-health"
   }
  ],
  "approval": [
   "Confirm whether dermal fillers are currently offered; if not, keep this page unpublished and remove links to it",
   "Confirm the injecting clinician’s name, Illinois license and filler-specific training, and that facial filler injection falls within that license’s scope",
   "Confirm which FDA-approved products are used and for which areas",
   "Confirm the practice’s protocol and supplies for managing vascular complications (including hyaluronidase) before describing them",
   "Confirm fees, scheduling and consultation availability before publishing any of them"
  ]
 },
 "massage": {
  "doc_title": "Therapeutic Massage as a Wellness Service",
  "meta": "What a therapeutic massage session involves, how it differs from dental treatment, who should check with a physician first and what massage cannot do.",
  "h1": "Therapeutic massage",
  "group": "Comfort & additional care",
  "summary": "Relaxation-focused massage offered as a wellness service, separate from dental diagnosis and treatment.",
  "keywords": "massage therapeutic massage relaxation neck massage shoulder tension stress relief wellness massage therapist masage",
  "layout": "standard",
  "lead": "Therapeutic massage is a hands-on wellness service intended for relaxation and comfort. It is separate from dental care and is not a treatment for any dental or medical condition.",
  "overview": {
   "heading": "Relaxation, kept separate from dentistry",
   "lead": "Some people carry tension in the neck, shoulders and face and find massage relaxing. In Illinois, massage therapy is a licensed profession, and sessions are given by a licensed massage therapist rather than by your dentist.",
   "paras": [
    "Research on massage for stress and muscle discomfort is mixed, and effects vary from person to person. Here it is offered purely as a comfort service – not as therapy for jaw joint disorders, headaches or anything that needs a diagnosis."
   ]
  },
  "considered": {
   "heading": "Who may choose a session",
   "items": [
    "Adults looking for relaxation or general stress relief",
    "People who notice tension in the neck and shoulders",
    "Anyone who wants a calm experience separate from dental appointments"
   ]
  },
  "compare": null,
  "steps": {
   "heading": "What a session involves",
   "items": [
    {
     "title": "Brief intake",
     "text": "The therapist asks about health conditions, injuries, medications and pressure preferences, and which areas to focus on or avoid."
    },
    {
     "title": "The session",
     "text": "You stay covered except for the area being worked on, and you can ask for lighter pressure or to stop at any time."
    },
    {
     "title": "Afterward",
     "text": "Mild soreness for a day is possible, especially after firmer pressure, and usually eases on its own."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "When to check with a physician first",
   "paras": [
    "Massage is generally low risk, but rare serious problems such as blood clots, nerve injury or fractures have been reported, mostly with vigorous techniques or in people at higher risk. Check with your physician first if you are pregnant, take blood thinners, have had a recent blood clot, surgery or fracture, or have osteoporosis, cancer, or a wound or skin infection in the area.",
    "Jaw pain, clicking, locking or persistent headaches deserve a dental or medical evaluation; massage is not a substitute for that assessment."
   ]
  },
  "callout": null,
  "faqs": [
   {
    "q": "Is massage part of my dental treatment?",
    "a": "No. It is a separate wellness service and is not used to diagnose or treat dental conditions. Your dental care plan does not depend on whether you choose massage."
   },
   {
    "q": "Can massage treat my jaw pain or TMJ?",
    "a": "Massage is not offered here as a treatment for jaw joint disorders. Persistent jaw pain, clicking or limited opening should be evaluated by a dentist or physician, who can recommend evidence-based care."
   },
   {
    "q": "Who provides the massage?",
    "a": "Sessions are given by a licensed massage therapist working within the scope of that license. Your dentist does not perform massage, and the therapist does not give dental or medical advice."
   }
  ],
  "related": [
   "approach",
   "sedation"
  ],
  "sources": [
   {
    "label": "NIH NCCIH — Massage Therapy: What You Need To Know",
    "url": "https://www.nccih.nih.gov/health/massage-therapy-what-you-need-to-know"
   }
  ],
  "approval": [
   "Confirm whether therapeutic massage is currently offered; if not, keep this page unpublished and remove homepage tiles, navigation and search links",
   "Confirm the massage therapist’s name and current Illinois massage therapy license",
   "Confirm where sessions take place, session length, scheduling and fees before publishing any of them",
   "Confirm whether massage is billed separately from dental services and whether it is excluded from membership plans"
  ]
 },
 "smart": {
  "doc_title": "SMART Amalgam Removal: Decisions and Precautions",
  "meta": "What dental amalgam is, when an old filling may need replacing, the FDA position on intact fillings, and what the IAOMT SMART protocol describes.",
  "h1": "SMART amalgam removal",
  "group": "Biological dentistry",
  "summary": "Evaluating older silver fillings, and the IAOMT protocol for precautions when replacement is indicated.",
  "keywords": "safe mercury amalgam removal smart protocol silver filling fillings replace iaomt mercury-free dentist replacement",
  "layout": "signature",
  "lead": "SMART – the Safe Mercury Amalgam Removal Technique – is a set of precautions published by the International Academy of Oral Medicine and Toxicology (IAOMT) for removing amalgam fillings. It addresses how a filling is removed; whether it should be removed is a separate clinical decision.",
  "overview": {
   "heading": "Two questions, answered separately",
   "lead": "Dental amalgam, often called a silver filling, is a mixture of liquid mercury and a powdered alloy of silver, tin and copper; about half of it by weight is mercury. It has been used for well over a century because it is durable and inexpensive, and many people have amalgam fillings that are still working well.",
   "paras": [
    "The FDA notes that amalgam releases low levels of mercury vapor, with release potentially highest when a filling is placed or removed. In 2020 it recommended non-mercury materials for new fillings, when appropriate, for certain higher-risk groups such as people who are pregnant or nursing, young children and people with impaired kidney function. It did not recommend removing intact fillings.",
    "That is why the conversation has two parts. First: does this filling need to be replaced for a clinical reason? Second, only if the answer is yes: what precautions should be used while it is removed? The practice describes its approach as mercury-free for new restorations and mercury-safe for removal."
   ]
  },
  "considered": {
   "heading": "Clinical reasons an older filling may be replaced",
   "items": [
    "New decay at the edges of the filling or beneath it",
    "A fractured filling, or a crack in the surrounding tooth",
    "Worn or open margins where the filling no longer seals the tooth",
    "Documented allergy or hypersensitivity to amalgam components",
    "A tooth that now needs a larger restoration, such as an onlay or crown"
   ]
  },
  "compare": {
   "heading": "Whether to replace versus how to remove",
   "intro": "Keeping these decisions separate is what makes the process clinically sound.",
   "columns": [
    "",
    "Whether to replace",
    "How to remove"
   ],
   "rows": [
    [
     "The question",
     "Does this filling need replacing?",
     "How should removal be carried out?"
    ],
    [
     "Based on",
     "Exam, X-rays, symptoms and medical history",
     "Protocol precautions, the tooth and the planned restoration"
    ],
    [
     "If the filling is intact",
     "The FDA generally advises leaving it in place",
     "Not applicable – no removal is planned"
    ],
    [
     "Guided by",
     "Clinical findings and FDA guidance",
     "Precaution protocols such as IAOMT’s SMART"
    ]
   ]
  },
  "steps": {
   "heading": "From evaluation to new restoration",
   "items": [
    {
     "title": "Evaluate each filling",
     "text": "The dentist examines each amalgam filling, reviews X-rays and asks about symptoms and medical history, including pregnancy, kidney conditions and sensitivities."
    },
    {
     "title": "A clear recommendation",
     "text": "You learn which fillings, if any, have a clinical reason for replacement and which are sound."
    },
    {
     "title": "Choose the replacement material",
     "text": "Composite resin (tooth-colored filling material), glass ionomer, or a ceramic inlay, onlay or crown – depending on the size and position of the restoration."
    },
    {
     "title": "Removal and restoration",
     "text": "Your dentist explains which precautions will be used during removal and how the visit will run, then the tooth is restored."
    },
    {
     "title": "Aftercare",
     "text": "Temporary sensitivity to cold or biting is common for days to a few weeks; lasting sensitivity should be reported."
    }
   ]
  },
  "expect": {
   "heading": "What the SMART protocol describes",
   "items": [
    {
     "label": "Before removal",
     "text": "The protocol describes high-volume air filtration in the treatment room, protective coverings for the patient’s skin, eyes and clothing, protective equipment for the dental team, and an alternative air supply such as a nasal mask so the patient is not breathing air from the mouth."
    },
    {
     "label": "During removal",
     "text": "It calls for isolating the tooth with a dental dam (a thin sheet that seals off the tooth), strong suction close to the tooth, plenty of water to keep the filling cool, and cutting the filling into chunks rather than grinding it away, to reduce vapor and particles."
    },
    {
     "label": "Afterward",
     "text": "It describes rinsing the mouth, removing the coverings, and capturing amalgam waste for appropriate disposal."
    }
   ]
  },
  "considerations": {
   "heading": "Risks, limits and honest expectations",
   "paras": [
    "Removing any filling also removes some healthy tooth structure, and each replacement makes the next restoration larger. Teeth with deep fillings can become sensitive after treatment, and occasionally the nerve becomes inflamed enough to need root canal treatment.",
    "Precautions are intended to reduce exposure during removal; they cannot reduce it to zero, which is one more reason intact fillings are left alone. Removing amalgam is not an established treatment for general health conditions, and SMART is a procedural protocol, not a detoxification program. Replacement materials have trade-offs of their own, including sensitivities some people have to resin components."
   ]
  },
  "callout": {
   "heading": "The FDA position on intact fillings",
   "text": "The FDA does not recommend removing or replacing amalgam fillings that are in good condition unless a health care professional considers it medically necessary – for example, documented hypersensitivity to amalgam. Removing intact fillings sacrifices healthy tooth structure and temporarily increases mercury vapor exposure."
  },
  "faqs": [
   {
    "q": "Should I have all my silver fillings replaced at once?",
    "a": "Only fillings with a clinical reason for replacement are typically recommended for removal; sound fillings are generally left in place. When several do need replacing, the work is often spread over more than one visit."
   },
   {
    "q": "Will removing my amalgam fillings improve my health symptoms?",
    "a": "Current evidence does not show that removing amalgam fillings improves general health symptoms, and the FDA does not recommend removal of intact fillings for that purpose. If you have health concerns you associate with your fillings, it is worth involving your physician alongside your dentist."
   },
   {
    "q": "I’m pregnant or nursing. Should I have fillings removed now?",
    "a": "The FDA’s 2020 recommendations name pregnant and nursing women among groups for whom non-mercury materials are preferred for new fillings, and they do not recommend removing intact fillings. Because removal briefly increases vapor exposure, elective replacement is commonly postponed; a broken or decayed filling is managed case by case with your dentist and, where appropriate, your physician."
   },
   {
    "q": "What replaces the amalgam?",
    "a": "Small and medium fillings are usually replaced with composite resin or glass ionomer. Larger restorations may call for a ceramic inlay, onlay or crown, which protects more of the tooth; the choice depends on how much healthy tooth remains."
   }
  ],
  "related": [
   "fillings",
   "crowns"
  ],
  "sources": [
   {
    "label": "FDA — Dental Amalgam Fillings",
    "url": "https://www.fda.gov/medical-devices/dental-devices/dental-amalgam-fillings"
   },
   {
    "label": "FDA — FDA Issues Recommendations for Certain High-Risk Groups Regarding Mercury-Containing Dental Amalgam (2020)",
    "url": "https://www.fda.gov/news-events/press-announcements/fda-issues-recommendations-certain-high-risk-groups-regarding-mercury-containing-dental-amalgam"
   }
  ],
  "approval": [
   "Confirm which SMART precautions the practice uses (air filtration, patient coverings, alternative air supply, dental dam, suction, sectioning, team PPE) and any certification status (e.g. IAOMT SMART certification or IAOMT membership) before stating either as practice fact",
   "Clinician review of the generic SMART protocol description (IAOMT site returned HTTP 403 to automated checks, so the protocol summary was not verified against the primary IAOMT page)",
   "Confirm which replacement materials are offered (composite resin, glass ionomer, ceramic inlays/onlays/crowns) and whether any are fabricated in-house or by a lab",
   "Approve the ‘mercury-free for new restorations and mercury-safe for removal’ wording",
   "Clinician review of the pregnancy and nursing FAQ",
   "Decide whether IAOMT resources may be linked as further reading (not on the approved source list for this page)"
  ]
 },
 "ozone": {
  "doc_title": "Dental Ozone Therapy: An Adjunct, Not a Substitute",
  "meta": "What dental ozone is, where it is studied as an add-on to conventional care, what the evidence shows, and the treatments it does not replace.",
  "h1": "Dental ozone therapy",
  "group": "Biological dentistry",
  "summary": "Ozone as a possible add-on to standard dental treatment, with its proposed uses and evidence limits explained.",
  "keywords": "ozone therapy dental ozone ozonated water ozonated oil ozone dentistry o3 biological dentist ozone for cavities ozone gum treatment ozone root canal ozon",
  "layout": "signature",
  "lead": "Dental ozone is a reactive form of oxygen applied in small, controlled amounts for its antimicrobial effect. Where it is used, it plays a supporting role alongside conventional treatment; it does not replace fillings, root canal treatment or gum therapy.",
  "overview": {
   "heading": "What ozone is, and the role it can play",
   "lead": "Ozone (O₃) is a molecule made of three oxygen atoms. It is unstable and breaks down quickly, and in laboratory studies it damages bacteria, fungi and viruses on contact. In dentistry it is delivered as a gas through a sealed cup or tip, dissolved in water as a rinse or irrigant, or blended into oil for application to tissues.",
   "paras": [
    "Clinical results have been less consistent than laboratory findings. Reviews of the research have generally found the evidence limited or mixed, and ozone should not be relied on in place of established treatment.",
    "At your consultation, your dentist will explain whether ozone has a role in your treatment, at which step, and what the conventional plan looks like without it."
   ]
  },
  "considered": {
   "heading": "Where ozone is studied as an add-on",
   "items": [
    "Disinfecting a prepared tooth before a filling is placed",
    "Irrigation during root canal treatment, alongside standard disinfectants",
    "Supplementing deep cleaning for gum disease",
    "Extraction sites and some mouth sores",
    "Early enamel lesions that are also being monitored"
   ]
  },
  "compare": {
   "heading": "Standard care and ozone’s possible place",
   "intro": "In each case the standard treatment does the essential work; ozone, if used, is an optional supplement.",
   "columns": [
    "",
    "Standard treatment",
    "Ozone’s possible role"
   ],
   "rows": [
    [
     "Cavity",
     "Remove decay and restore the tooth",
     "Possible disinfection step before the filling"
    ],
    [
     "Infected tooth nerve",
     "Root canal treatment or extraction",
     "Possible supplementary irrigant, not a replacement"
    ],
    [
     "Gum disease",
     "Scaling and root planing, home care, maintenance visits",
     "Possible add-on during cleaning"
    ],
    [
     "Early white spot",
     "Monitoring, diet changes and remineralization",
     "Studied; evidence inconclusive"
    ]
   ]
  },
  "steps": {
   "heading": "How ozone fits a treatment plan",
   "items": [
    {
     "title": "Diagnosis comes first",
     "text": "The dentist identifies the problem with an exam and, where needed, X-rays."
    },
    {
     "title": "The standard plan is set",
     "text": "The established treatment for that diagnosis is explained in full."
    },
    {
     "title": "The adjunct is discussed",
     "text": "If ozone is proposed, you hear what it is meant to add, what the evidence does and does not show, and any extra cost, so you can accept or decline it."
    },
    {
     "title": "Results are judged conventionally",
     "text": "Progress is assessed with the usual measures, such as X-rays, gum pocket measurements and symptoms."
    }
   ]
  },
  "expect": null,
  "considerations": {
   "heading": "Safety and the limits of the evidence",
   "paras": [
    "Because inhaled ozone irritates the lungs, dental delivery systems are designed to contain it at the treatment site. Your health history, including breathing conditions and pregnancy, is reviewed before any adjunct is used.",
    "There is no reliable evidence that ozone on its own resolves tooth decay, gum disease or dental infections. Where research shows little added benefit for a particular use, standard treatment alone is the appropriate plan."
   ]
  },
  "callout": {
   "heading": "What ozone does not replace",
   "text": "Ozone is not a substitute for removing decay, treating an infected tooth, periodontal therapy or antibiotics when they are needed. If ozone is suggested, the standard treatment should remain fully available without it."
  },
  "faqs": [
   {
    "q": "Does ozone application feel like anything?",
    "a": "Applied through a sealed cup or as a rinse, ozone itself usually causes little sensation, though some people notice a distinctive smell. Any discomfort is more likely to come from the procedure it accompanies, such as a filling or cleaning."
   },
   {
    "q": "Can ozone treat a cavity without drilling?",
    "a": "Ozone has been studied for early decay, but the evidence is not strong enough to rely on it alone. Once a cavity has formed, the decayed tissue still needs to be removed and the tooth restored."
   },
   {
    "q": "Is ozone safe to breathe?",
    "a": "No. Inhaled ozone irritates the airways, which is why dental systems deliver it in a contained way with suction close by."
   },
   {
    "q": "Will ozone be used at every appointment?",
    "a": "No. It is considered only when a clinician sees a specific purpose for it within a treatment plan, and many visits and treatments do not involve it at all."
   }
  ],
  "related": [
   "smart",
   "periodontal"
  ],
  "sources": [],
  "approval": [
   "Confirm whether dental ozone is currently offered and, if so, for which specific procedures (do not imply broader use than actual)",
   "Confirm the delivery forms used (gas, ozonated water, ozonated oil) and the device, including its regulatory status",
   "Clinician-approved list of contraindications and precautions (e.g. breathing conditions, pregnancy) before any specific list is published",
   "Confirm whether ozone carries a separate fee"
  ]
 }
}
RAINA_JSON;
