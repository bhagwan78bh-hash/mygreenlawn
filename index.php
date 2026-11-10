<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mygreenlawn — The Homeowner's Lawn Care Guide</title>
  <meta name="description" content="A practical, season-by-season lawn care guide: mowing heights, watering schedules, feeding, weed control, and troubleshooting for a greener lawn.">
  <meta name="theme-color" content="#0f3d26">
  <meta property="og:title" content="mygreenlawn — The Homeowner's Lawn Care Guide">
  <meta property="og:description" content="A practical, season-by-season lawn care guide: mowing heights, watering schedules, feeding, weed control, and troubleshooting.">
  <meta property="og:type" content="website">
  <link rel="icon" href="favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header" id="top">
    <div class="container header-inner">
      <a class="brand" href="index.html" aria-label="mygreenlawn home">
        <span class="brand-mark" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 20C4 11 10 5 20 4c0 10-6 16-16 16Z"></path>
            <path d="M4 20c3-5 7-8 12-10"></path>
          </svg>
        </span>
        <span class="brand-name"><em>my</em>greenlawn</span>
      </a>

      <div class="nav-wrap" id="site-nav">
        <nav aria-label="Primary">
          <ul class="nav-list">
            <li><a href="#guide">The guide</a></li>
            <li><a href="#seasons">Seasons</a></li>
            <li><a href="#mowing">Mowing</a></li>
            <li><a href="#watering">Watering</a></li>
            <li><a href="#fixes">Fixes</a></li>
            <li><a href="#faq">FAQ</a></li>
          </ul>
        </nav>
      </div>

      <div class="header-actions">
        <a class="btn btn-primary" href="#checklist">Get the checklist</a>
      </div>

      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Open menu">
        <svg class="icon-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
          <path d="M4 7h16M4 12h16M4 17h16"></path>
        </svg>
        <svg class="icon-close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
          <path d="M6 6l12 12M18 6 6 18"></path>
        </svg>
      </button>
    </div>
  </header>

  <main id="main">
    <!-- ================= HERO ================= -->
    <section class="hero" aria-labelledby="hero-title">
      <div class="container">
        <div class="hero-grid">
          <div>
            <span class="eyebrow">The homeowner's field guide</span>
            <h1 id="hero-title">A greener lawn,<br><em>one weekend</em> at a time.</h1>
            <p class="lede">
              No guesswork, no twelve-step programs. Just the six things that actually
              matter — soil, mowing, water, feeding, weeds, and timing — explained in
              plain language for real yards.
            </p>
            <div class="hero-actions">
              <a class="btn btn-primary" href="#guide">
                Start the guide
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 12h14M13 6l6 6-6 6"></path>
                </svg>
              </a>
              <a class="btn btn-ghost" href="#checklist">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 13l4 4L19 7"></path>
                </svg>
                See the checklist
              </a>
            </div>
            <div class="hero-stats">
              <div class="stat"><strong>12</strong><span>Month plan</span></div>
              <div class="stat"><strong>6</strong><span>Care pillars</span></div>
              <div class="stat"><strong>1/3</strong><span>Mow rule</span></div>
            </div>
          </div>

          <div class="hero-visual" aria-hidden="true">
            <div class="lawn-panel">
              <div class="lawn-head">
                <span class="pill-live"><i></i> Week 45 · Late fall</span>
                <span class="lawn-zone">Zone 6b</span>
              </div>
              <div class="lawn-stripes">
                <span class="sun"></span>
                <span class="mower-mark">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4 8.1 15.9M20 20 8.1 8.1"></path>
                  </svg>
                </span>
              </div>
              <div class="lawn-rows">
                <div class="lawn-row"><span>Soil moisture</span><b>1.3 in</b><i class="dot dot-good"></i></div>
                <div class="lawn-row"><span>Mow height</span><b>3.0 in</b><i class="dot dot-good"></i></div>
                <div class="lawn-row"><span>Leaf cover</span><b>Moderate</b><i class="dot dot-warn"></i></div>
              </div>
            </div>
            <div class="float-card">
              <strong>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M18.4 5.6l-2.1 2.1M7.7 16.3l-2.1 2.1"></path>
                  <circle cx="12" cy="12" r="3.2"></circle>
                </svg>
                The one-third rule
              </strong>
              <p>Never cut more than a third of the blade at once. It keeps roots deep and color even.</p>
            </div>
          </div>
        </div>

        <div class="facts">
          <div class="facts-grid">
            <div class="fact"><strong>1–1.5 in</strong><span>Water per week, rain included</span></div>
            <div class="fact"><strong>2.5–4 in</strong><span>Mowing height, by grass type</span></div>
            <div class="fact"><strong>6.0–7.0</strong><span>Ideal soil pH for most lawns</span></div>
            <div class="fact"><strong>3–4×</strong><span>Feedings per year, not per month</span></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= PILLARS ================= -->
    <section class="section" id="guide" aria-labelledby="guide-title">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow">Start here</span>
          <h2 id="guide-title">Six pillars of a healthy lawn</h2>
          <p>Most lawn problems start with one of these six. Get them roughly right and the
            rest of the guide becomes maintenance instead of rescue work.</p>
        </div>

        <div class="pillars">
          <article class="pillar">
            <div class="icon-tile" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <path d="m12 3 9 5-9 5-9-5 9-5Z"></path>
                <path d="m3 13 9 5 9-5"></path>
              </svg>
            </div>
            <h3>Soil first</h3>
            <p>Grass is only as good as what it grows in. Test pH and nutrients every two to
              three years, then fix compaction before you buy another bag of seed.</p>
            <span class="tag">Test · aerate · amend</span>
          </article>

          <article class="pillar">
            <div class="icon-tile" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <path d="M20 4 8.1 15.9M20 20 8.1 8.1"></path>
              </svg>
            </div>
            <h3>Mow like you mean it</h3>
            <p>A sharp blade at the right height does more for color than most products.
              Follow the one-third rule and change direction each cut.</p>
            <span class="tag">Sharp · tall · alternating</span>
          </article>

          <article class="pillar">
            <div class="icon-tile" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 3s6 6.4 6 11a6 6 0 0 1-12 0c0-4.6 6-11 6-11Z"></path>
              </svg>
            </div>
            <h3>Water deep, not often</h3>
            <p>One or two long soaks a week train roots to grow down. Daily light
              sprinkling trains them to stay near the surface — and to fail in July.</p>
            <span class="tag">1–1.5 in · early morning</span>
          </article>

          <article class="pillar">
            <div class="icon-tile" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 3h6M10 3v6l-5 9a2 2 0 0 0 2 3h10a2 2 0 0 0 2-3l-5-9V3"></path>
                <path d="M7.5 15h9"></path>
              </svg>
            </div>
            <h3>Feed the grass</h3>
            <p>Slow-release nitrogen, applied when the grass is actively growing. More
              fertilizer is not better — it is just more mowing and more thatch.</p>
            <span class="tag">3–4× per year</span>
          </article>

          <article class="pillar">
            <div class="icon-tile" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <rect x="8" y="8" width="8" height="10" rx="4"></rect>
                <path d="M8 12H4M20 12h-4M8 16H4M20 16h-4M9 8 7 5M15 8l2-3M12 18v3"></path>
              </svg>
            </div>
            <h3>Outcompete, then treat</h3>
            <p>A thick lawn is the best weed control there is. Fix thin turf first, then
              spot-treat problems instead of blanketing the whole yard.</p>
            <span class="tag">Density beats chemicals</span>
          </article>

          <article class="pillar">
            <div class="icon-tile" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="5" width="18" height="16" rx="2"></rect>
                <path d="M8 3v4M16 3v4M3 11h18"></path>
              </svg>
            </div>
            <h3>Timing wins</h3>
            <p>Overseed in early fall, not spring. Pre-emergent before weed seeds
              germinate. Do the right task a few weeks late and you may as well skip it.</p>
            <span class="tag">Calendar over effort</span>
          </article>
        </div>
      </div>
    </section>

    <!-- ================= SEASONS ================= -->
    <section class="section section--tint" id="seasons" aria-labelledby="seasons-title">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow">The season planner</span>
          <h2 id="seasons-title">What to do, and when</h2>
          <p>Choose a season for the short list that matters. Exact timing shifts with
            your climate, so treat months as a guide and grass growth as the real signal.</p>
        </div>

        <div class="season-tabs" role="tablist" aria-label="Lawn care by season">
          <button class="season-tab" role="tab" id="tab-spring" aria-controls="panel-spring" aria-selected="true" tabindex="0">Spring</button>
          <button class="season-tab" role="tab" id="tab-summer" aria-controls="panel-summer" aria-selected="false" tabindex="-1">Summer</button>
          <button class="season-tab" role="tab" id="tab-fall" aria-controls="panel-fall" aria-selected="false" tabindex="-1">Fall</button>
          <button class="season-tab" role="tab" id="tab-winter" aria-controls="panel-winter" aria-selected="false" tabindex="-1">Winter</button>
        </div>

        <div class="season-panel" id="panel-spring" role="tabpanel" aria-labelledby="tab-spring" tabindex="0">
          <div class="season-intro">
            <span class="season-months">March – May</span>
            <h3>Wake it up gently</h3>
            <p>Spring is for cleanup and setup, not for forcing growth. Let the lawn come
              out of dormancy on its own schedule and give it what it is missing.</p>
            <div class="season-focus">
              <b>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <circle cx="12" cy="12" r="4"></circle>
                  <path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"></path>
                </svg>
                Focus this season
              </b>
              <p>Get a soil test and apply pre-emergent when soil temperatures hold near
                55°F — before crabgrass starts, not after you see it.</p>
            </div>
          </div>
          <ul class="task-list">
            <li>
              <span class="task-num">01</span>
              <div><b>Test the soil</b><span>A $15–$30 lab test tells you pH, phosphorus, and potassium. Skip guessing.</span></div>
            </li>
            <li>
              <span class="task-num">02</span>
              <div><b>Apply pre-emergent on time</b><span>Soil at 55°F and rising. Water it in lightly; don't disturb the barrier.</span></div>
            </li>
            <li>
              <span class="task-num">03</span>
              <div><b>First cut, lower deck</b><span>Clean up winter growth, then raise the deck for the rest of the season.</span></div>
            </li>
            <li>
              <span class="task-num">04</span>
              <div><b>Repair winter damage</b><span>Rake matted spots, add topsoil to low areas, and seed thin patches if you must.</span></div>
            </li>
          </ul>
        </div>

        <div class="season-panel" id="panel-summer" role="tabpanel" aria-labelledby="tab-summer" tabindex="0" hidden>
          <div class="season-intro">
            <span class="season-months">June – August</span>
            <h3>Protect, don't push</h3>
            <p>Heat is a stress test. Your job is to keep roots cool and avoid making
              changes that force the grass to spend energy it doesn't have.</p>
            <div class="season-focus">
              <b>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M12 3v18M5 8l7-5 7 5M5 16l7 5 7-5"></path>
                </svg>
                Focus this season
              </b>
              <p>Raise the mowing height by half an inch and water deeply twice a week.
                Taller blades shade the soil and cut evaporation.</p>
            </div>
          </div>
          <ul class="task-list">
            <li>
              <span class="task-num">01</span>
              <div><b>Raise the deck</b><span>Cool-season grass: 3–4 in. Warm-season: keep to its normal range.</span></div>
            </li>
            <li>
              <span class="task-num">02</span>
              <div><b>Water deep, twice weekly</b><span>0.5–0.75 in per session, early morning. Measure, don't eyeball.</span></div>
            </li>
            <li>
              <span class="task-num">03</span>
              <div><b>Scout for pests</b><span>Pull on a brown patch — if it lifts like a carpet, check for grubs.</span></div>
            </li>
            <li>
              <span class="task-num">04</span>
              <div><b>Leave the clippings</b><span>Mulched clippings return nitrogen and moisture. Bag only long or wet grass.</span></div>
            </li>
          </ul>
        </div>

        <div class="season-panel" id="panel-fall" role="tabpanel" aria-labelledby="tab-fall" tabindex="0" hidden>
          <div class="season-intro">
            <span class="season-months">September – November</span>
            <h3>The main event</h3>
            <p>For cool-season lawns, fall is the most important season of the year. Warm
              soil and cool air are exactly what roots and new seed need.</p>
            <div class="season-focus">
              <b>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M12 21v-8"></path>
                  <path d="M12 13c0-4 3-7 7-7 0 4-3 7-7 7Z"></path>
                  <path d="M12 15c0-3-2-5-5-5 0 3 2 5 5 5Z"></path>
                </svg>
                Focus this season
              </b>
              <p>Aerate, overseed, and feed within a few weeks of each other. This is the
                window that fixes thin turf for next summer.</p>
            </div>
          </div>
          <ul class="task-list">
            <li>
              <span class="task-num">01</span>
              <div><b>Core aerate</b><span>Pull plugs when the soil is moist. Best done the same day as overseeding.</span></div>
            </li>
            <li>
              <span class="task-num">02</span>
              <div><b>Overseed thin areas</b><span>Match seed to your grass and light. Keep it moist for two to three weeks.</span></div>
            </li>
            <li>
              <span class="task-num">03</span>
              <div><b>Feed for roots</b><span>A fall feeding builds carbohydrate reserves for winter — not top growth.</span></div>
            </li>
            <li>
              <span class="task-num">04</span>
              <div><b>Rake leaves promptly</b><span>Leaves left in place smother turf and invite snow mold. Chop and compost.</span></div>
            </li>
          </ul>
        </div>

        <div class="season-panel" id="panel-winter" role="tabpanel" aria-labelledby="tab-winter" tabindex="0" hidden>
          <div class="season-intro">
            <span class="season-months">December – February</span>
            <h3>Rest and plan</h3>
            <p>Mostly, leave it alone. Dormant grass still needs light and air, but it does
              not need fertilizer, traffic, or a well-meaning cleanup that tears it up.</p>
            <div class="season-focus">
              <b>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M12 2v20M4 6l16 12M20 6 4 18"></path>
                </svg>
                Focus this season
              </b>
              <p>Stay off frost-covered grass — footprints break blades and leave brown
                trails until spring. Use the downtime to plan and service equipment.</p>
            </div>
          </div>
          <ul class="task-list">
            <li>
              <span class="task-num">01</span>
              <div><b>Stay off frozen turf</b><span>No mowing, no raking, no playing on frost. Damage is slow to heal.</span></div>
            </li>
            <li>
              <span class="task-num">02</span>
              <div><b>Service the mower</b><span>Sharpen the blade, change the oil, replace the plug. Book it before spring rush.</span></div>
            </li>
            <li>
              <span class="task-num">03</span>
              <div><b>Plan next year</b><span>Order a soil test, note bare spots, and pick your seed before it sells out.</span></div>
            </li>
            <li>
              <span class="task-num">04</span>
              <div><b>Check drainage</b><span>Clear gutters and low spots so meltwater doesn't sit on the lawn.</span></div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ================= MOWING ================= -->
    <section class="section" id="mowing" aria-labelledby="mowing-title">
      <div class="container">
        <div class="split">
          <div>
            <span class="eyebrow">Mowing</span>
            <h2 id="mowing-title">The cheapest upgrade is a sharp blade</h2>
            <p class="lede">Dull blades tear grass instead of cutting it. The torn tips brown
              out, lose water, and invite disease — which is why a lawn can look worse after
              mowing even when you did everything else right.</p>

            <ul class="tip-list">
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 13l4 4L19 7"></path></svg>
                <span><b>Sharpen every 8–10 mowing hours.</b> That is roughly once a month in peak season.</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 13l4 4L19 7"></path></svg>
                <span><b>Cut no more than one-third.</b> If the grass got away from you, take it down in two passes.</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 13l4 4L19 7"></path></svg>
                <span><b>Alternate direction.</b> Changing the pattern each cut keeps ruts away and helps blades stand up.</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 13l4 4L19 7"></path></svg>
                <span><b>Mow dry grass.</b> Wet clippings clump, smother, and dull the blade faster.</span>
              </li>
            </ul>
          </div>

          <div class="table-card">
            <div class="table-head">
              <h3>Mowing heights by grass type</h3>
            </div>
            <div class="table-scroll">
              <table>
                <caption class="visually-hidden">Recommended mowing height and frequency by grass species</caption>
                <thead>
                  <tr>
                    <th scope="col">Grass</th>
                    <th scope="col">Type</th>
                    <th scope="col">Height</th>
                    <th scope="col">Frequency</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tall fescue</td>
                    <td><span class="badge badge-cool">Cool</span></td>
                    <td class="num">2.5–3.5 in</td>
                    <td class="num">Weekly</td>
                  </tr>
                  <tr>
                    <td>Kentucky bluegrass</td>
                    <td><span class="badge badge-cool">Cool</span></td>
                    <td class="num">2.5–3 in</td>
                    <td class="num">5–7 days</td>
                  </tr>
                  <tr>
                    <td>Fine fescue</td>
                    <td><span class="badge badge-cool">Cool</span></td>
                    <td class="num">3–3.5 in</td>
                    <td class="num">7–10 days</td>
                  </tr>
                  <tr>
                    <td>Bermudagrass</td>
                    <td><span class="badge badge-warm">Warm</span></td>
                    <td class="num">1–2 in</td>
                    <td class="num">5–7 days</td>
                  </tr>
                  <tr>
                    <td>Zoysia</td>
                    <td><span class="badge badge-warm">Warm</span></td>
                    <td class="num">1.5–2.5 in</td>
                    <td class="num">7–10 days</td>
                  </tr>
                  <tr>
                    <td>St. Augustine</td>
                    <td><span class="badge badge-warm">Warm</span></td>
                    <td class="num">3.5–4 in</td>
                    <td class="num">Weekly</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="table-note">Ranges are for actively growing season. Raise the deck by
              about half an inch during heat or drought stress, then return to normal.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= WATERING ================= -->
    <section class="section section--deep" id="watering" aria-labelledby="watering-title">
      <div class="container">
        <div class="water-grid">
          <div>
            <span class="eyebrow">Watering</span>
            <div class="section-head" style="margin-bottom: 0;">
              <h2 id="watering-title">Inches, not minutes</h2>
              <p>Sprinkler output varies wildly, so timers lie. The only number that
                matters is how many inches of water actually reach the soil each week.</p>
            </div>

            <ol class="steps">
              <li class="step">
                <span class="step-num">1</span>
                <div><b>Measure once with a can</b><p>Set straight-sided cans around a zone, run the sprinkler 15 minutes, and measure the depth. Now you know your precipitation rate.</p></div>
              </li>
              <li class="step">
                <span class="step-num">2</span>
                <div><b>Target 1–1.5 inches per week</b><p>Include rainfall. In mild weather, aim low; in heat or wind, move toward the top of the range.</p></div>
              </li>
              <li class="step">
                <span class="step-num">3</span>
                <div><b>Split it into two sessions</b><p>Two half-inch soaks beat six light sprinkles. Water long enough to reach the root zone, then let the surface dry.</p></div>
              </li>
              <li class="step">
                <span class="step-num">4</span>
                <div><b>Water early, 5–9 a.m.</b><p>Less wind, less evaporation, and blades dry before nightfall. Evening watering invites fungus.</p></div>
              </li>
              <li class="step">
                <span class="step-num">5</span>
                <div><b>Ease off in fall</b><p>Cooler air means lower demand. Dormant grass needs very little; overs watering is a common winter mistake.</p></div>
              </li>
            </ol>
          </div>

          <div class="calc">
            <div class="calc-head">
              <h3>Weekly water calculator</h3>
              <span>Estimate</span>
            </div>

            <div class="field">
              <label for="calc-area">Lawn area <output id="area-out" for="calc-area">3,000 sq ft</output></label>
              <input type="range" id="calc-area" min="500" max="15000" step="250" value="3000">
            </div>

            <div class="field">
              <label for="calc-inches">Water per week <output id="inches-out" for="calc-inches">1.0 in</output></label>
              <input type="range" id="calc-inches" min="0.5" max="2" step="0.1" value="1">
            </div>

            <div class="field">
              <label for="calc-sessions">Watering sessions</label>
              <select id="calc-sessions">
                <option value="1">1× per week (heavy soak)</option>
                <option value="2" selected>2× per week (recommended)</option>
                <option value="3">3× per week (sandy soil)</option>
              </select>
            </div>

            <div class="calc-results" aria-live="polite">
              <div class="result">
                <strong id="result-week">1,870</strong>
                <span>Gallons / week</span>
              </div>
              <div class="result">
                <strong id="result-session">935</strong>
                <span>Gallons / session</span>
              </div>
            </div>
            <p class="calc-note">Rough estimate using 0.623 gallons per square foot per
              inch of water. Adjust for rainfall and your sprinkler's actual output.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= FIXES ================= -->
    <section class="section" id="fixes" aria-labelledby="fixes-title">
      <div class="container">
        <div class="section-head">
          <span class="eyebrow">Troubleshooting</span>
          <h2 id="fixes-title">Read the symptom, then the fix</h2>
          <p>Most lawn issues fall into a handful of patterns. Before you buy a product,
            work out which pattern you are looking at.</p>
        </div>

        <div class="trouble-grid">
          <article class="trouble">
            <h3>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 3v3M12 21a6 6 0 0 0 6-6c0-3-2.5-5.5-6-9-3.5 3.5-6 6-6 9a6 6 0 0 0 6 6Z"></path>
              </svg>
              Brown patches
            </h3>
            <p class="symptom"><b>Look for:</b> irregular dry spots, a ragged cut, or turf that lifts easily. Drought, a dull blade, fungus, and grubs all look similar.</p>
            <p class="fix"><b>Fix:</b> Sharpen the blade, check watering depth, and do the tug test. Treat grubs only when you find them.</p>
          </article>

          <article class="trouble">
            <h3>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M12 2v2M12 20v2M2 12h2M20 12h2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M19.1 4.9l-1.4 1.4M6.3 17.7l-1.4 1.4"></path>
              </svg>
              Yellowing turf
            </h3>
            <p class="symptom"><b>Look for:</b> uniform pale color, streaks from a spreader, or spots from pets. Nitrogen, iron, pH, and urine can all cause it.</p>
            <p class="fix"><b>Fix:</b> Feed lightly with slow-release nitrogen; water dog spots deeply. If it persists, test pH before adding more.</p>
          </article>

          <article class="trouble">
            <h3>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 21v-8"></path>
                <path d="M12 13c0-4 3-7 7-7 0 4-3 7-7 7Z"></path>
                <path d="M12 15c0-3-2-5-5-5 0 3 2 5 5 5Z"></path>
              </svg>
              Weeds moving in
            </h3>
            <p class="symptom"><b>Look for:</b> dandelions, crabgrass, or clover in thin or compacted areas. Weeds fill space that grass is not holding.</p>
            <p class="fix"><b>Fix:</b> Aerate, overseed, and mow taller. Spot-treat what remains instead of spraying the entire lawn.</p>
          </article>

          <article class="trouble">
            <h3>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M4 18c2-4 4-6 8-6s6 2 8 6"></path>
                <path d="M4 13c2-3 4-4 8-4s6 1 8 4"></path>
                <path d="M8 21h8"></path>
              </svg>
              Moss in the lawn
            </h3>
            <p class="symptom"><b>Look for:</b> moss in shade, at lawn edges, or where water sits. It signals low light, low pH, or soggy soil.</p>
            <p class="fix"><b>Fix:</b> Improve drainage and airflow, lime only if a test says so, and seed with a shade-tolerant mix.</p>
          </article>

          <article class="trouble">
            <h3>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 3v18"></path>
                <path d="M5 8c2 0 3-1 3-3 2 0 4 1.5 4 4 0-2.5 2-4 4-4 0 2 1 3 3 3"></path>
                <path d="M5 16c2 0 3 1 3 3 2 0 4-1.5 4-4 0 2.5 2 4 4 4 0-2 1-3 3-3"></path>
              </svg>
              Mushrooms
            </h3>
            <p class="symptom"><b>Look for:</b> caps popping up after rain or irrigation. Usually harmless decomposers feeding on buried organic matter.</p>
            <p class="fix"><b>Fix:</b> Knock them over or mow them. Improve airflow and avoid overwatering — no fungicide needed.</p>
          </article>

          <article class="trouble">
            <h3>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M3 7h18M3 12h18M3 17h18"></path>
                <path d="M7 4v16M17 4v16"></path>
              </svg>
              Spongy, thick thatch
            </h3>
            <p class="symptom"><b>Look for:</b> a springy layer more than half an inch thick between grass and soil. Water and air struggle to get through.</p>
            <p class="fix"><b>Fix:</b> Core aerate in early fall, dethatch if needed, and stop overfertilizing. Let clippings break down.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- ================= CHECKLIST ================= -->
    <section class="section section--tint" id="checklist" aria-labelledby="checklist-title">
      <div class="container">
        <div class="check-wrap">
          <div>
            <span class="eyebrow">The maintenance list</span>
            <h2 id="checklist-title">Your lawn's standing checklist</h2>
            <p class="lede">Twelve habits that cover almost everything. Tick them off as you
              go — your progress is saved in this browser only.</p>

            <div class="progress-head">
              <span id="progress-label">0 of 12 done</span>
              <span id="progress-pct">0%</span>
            </div>
            <div class="progress" role="progressbar" aria-labelledby="progress-label" aria-valuemin="0" aria-valuemax="12" aria-valuenow="0" id="progress-track">
              <div class="progress-bar" id="progress-bar"></div>
            </div>
            <div class="check-actions">
              <button class="reset-btn" type="button" id="reset-checklist">Reset list</button>
              <span class="check-hint">Saved locally — no account needed.</span>
            </div>
          </div>

          <div class="checklist" id="checklist">
            <label class="check">
              <input type="checkbox" data-key="blade">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Sharpen or replace the mower blade</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="water">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Measure watering with a can or rain gauge</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="scout">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Scout for weeds, grubs, and bare spots</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="height">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Mow at the right height for your grass</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="leaves">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Clear leaves and thick clippings</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="soil">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Test soil pH and nutrients</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="aerate">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Aerate compacted or high-traffic areas</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="overseed">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Overseed thin or bare patches</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="feed">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Apply slow-release fertilizer on schedule</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="edges">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Clear debris from drains and lawn edges</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="irrigation">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Check hoses, heads, and timers</span>
            </label>
            <label class="check">
              <input type="checkbox" data-key="log">
              <span class="box" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"></path></svg></span>
              <span class="text">Log what worked this month</span>
            </label>
          </div>
        </div>
      </div>
    </section>

    <!-- ================= FAQ ================= -->
    <section class="section" id="faq" aria-labelledby="faq-title">
      <div class="container">
        <div class="section-head section-head--center">
          <span class="eyebrow">Questions</span>
          <h2 id="faq-title">Quick answers</h2>
          <p>The things people ask most before their first full season.</p>
        </div>

        <div class="faq">
          <details>
            <summary>
              How often should I water my lawn?
              <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
            </summary>
            <p>Aim for 1 to 1.5 inches per week, including rainfall, delivered in one or two
              deep sessions. Water early in the morning so the blades dry during the day.
              Sandy soil may need three shorter sessions; clay may need one slow soak.</p>
          </details>

          <details>
            <summary>
              When is the best time to fertilize?
              <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
            </summary>
            <p>For cool-season grass, the most important feeding is early fall, with a
              lighter one in late spring. Warm-season grass prefers late spring through
              summer, while it is actively growing. Avoid feeding dormant or heat-stressed
              turf.</p>
          </details>

          <details>
            <summary>
              How short should I mow?
              <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
            </summary>
            <p>Follow your grass type: roughly 2.5–3.5 inches for cool-season lawns and
              1–4 inches for warm-season lawns depending on species. Whatever the number,
              never remove more than a third of the blade in one pass.</p>
          </details>

          <details>
            <summary>
              How do I fix a bare patch?
              <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
            </summary>
            <p>Remove the dead material, loosen the top inch of soil, and seed at the rate
              on the label. Keep it consistently moist — not soaking — for two to three
              weeks. Early fall is the best window for cool-season grass; late spring works
              for warm-season grass.</p>
          </details>

          <details>
            <summary>
              Do I really need a soil test?
              <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
            </summary>
            <p>Yes, every two to three years. It costs less than a bag of fertilizer and
              tells you whether you need lime, phosphorus, or nothing at all. Without it,
              you are guessing — and over-applying is common.</p>
          </details>

          <details>
            <summary>
              Can I mow in the rain or right after?
              <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
            </summary>
            <p>Wait if you can. Wet grass clumps, clogs the deck, and tears instead of
              cutting cleanly. If you must mow, raise the deck and plan to sharpen the
              blade sooner. Never mow frost-covered grass at all.</p>
          </details>
        </div>
      </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="cta-section">
      <div class="container">
        <div class="cta">
          <div>
            <h2>Do one season properly. The lawn will remember.</h2>
            <p>Start with soil and mowing, add water and timing, and most of the expensive
              products become unnecessary. Keep the checklist handy and revisit it monthly.</p>
          </div>
          <a class="btn btn-light" href="#checklist">
            Open the checklist
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"></path></svg>
          </a>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a class="brand" href="index.html" aria-label="mygreenlawn home">
            <span class="brand-mark" aria-hidden="true">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 20C4 11 10 5 20 4c0 10-6 16-16 16Z"></path>
                <path d="M4 20c3-5 7-8 12-10"></path>
              </svg>
            </span>
            <span class="brand-name"><em>my</em>greenlawn</span>
          </a>
          <p>A practical field guide for homeowners who want a healthier lawn without the
            guesswork, the jargon, or the twelve-step program.</p>
        </div>

        <div class="footer-col">
          <h3>The guide</h3>
          <ul>
            <li><a href="#guide">Six pillars</a></li>
            <li><a href="#seasons">Season planner</a></li>
            <li><a href="#mowing">Mowing heights</a></li>
            <li><a href="#watering">Watering</a></li>
            <li><a href="#fixes">Troubleshooting</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h3>Tools</h3>
          <ul>
            <li><a href="#checklist">Maintenance checklist</a></li>
            <li><a href="#watering">Water calculator</a></li>
            <li><a href="#faq">Quick answers</a></li>
            <li><a href="mailto:hello@mygreenlawn.com">Contact us</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h3>Legal</h3>
          <ul>
            <li><a href="terms.html">Terms of use</a></li>
            <li><a href="privacy.html">Privacy policy</a></li>
            <li><a href="privacy.html#cookies">Cookies</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <p>© <span id="year">2026</span> mygreenlawn. General information only — not a
          substitute for advice from a local lawn care or horticultural professional.</p>
        <div class="footer-legal">
          <a href="terms.html">Terms</a>
          <a href="privacy.html">Privacy</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
