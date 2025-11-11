<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Poet & Scribe • Design Systems & Product Strategy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Working directly with teams, agencies, or teaming with indie partners.">

    <meta property="og:url" content="https://poetandscribe.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Poet & Scribe • Design Systems & Product Strategy">
    <meta property="og:description" content="Working directly with teams, agencies, or teaming with indie partners; establishing foundations, scaling what's working, or untangling what isn't.">
    <meta property="og:image" content="<?php $site->url(); ?>/og-share.png">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="poetandscribe.com">
    <meta property="twitter:url" content="https://poetandscribe.com">
    <meta name="twitter:title" content="Poet & Scribe • Design Systems & Product Strategy">
    <meta name="twitter:description" content="Working directly with teams, agencies, or teaming with indie partners; establishing foundations, scaling what's working, or untangling what isn't.">
    <meta name="twitter:image" content="<?php $site->url(); ?>/assets/og-share.png">

    <link rel="icon" type="image/x-icon" href="<?php $site->url(); ?>/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php $site->url(); ?>/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php $site->url(); ?>/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php $site->url(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php $site->url(); ?>/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="<?php $site->url(); ?>/android-chrome-512x512.png">
    <meta name="theme-color" content="#F9F9F4">

    <link rel="preload" as="font" href="<?php $site->url(); ?>/assets/fonts/BricolageGrotesque.woff2" crossorigin>
    <link rel="preload" as="font" href="<?php $site->url(); ?>/assets/fonts/Recursive_VF_1.085--subset_range_english_basic.woff2" crossorigin>

    <style>
      @font-face {
        font-family: 'Bricolage Grotesque';
        font-weight: 200 800;
        font-stretch: 75% 100%;
        font-display: swap;
        src:
          url(<?php $site->url(); ?>'/assets/fonts/BricolageGrotesque.woff2') format('woff2-variations');
      }

      /* The bare minimum English subset, plus copyright & arrows (← ↑ → ↓) & quotes (“ ” ‘ ’) & bullet (•) */
      @font-face {
       font-family: 'RecVar';
       font-style: oblique 0deg 15deg;
       font-weight: 300 1000;
       font-display: swap;
       src: url(<?php $site->url(); ?>'/assets/fonts/Recursive_VF_1.085--subset_range_english_basic.woff2') format('woff2');
       unicode-range: U+0020-007F,U+00A9,U+2190-2193,U+2018,U+2019,U+201C,U+201D,U+2022;
      }

      /* unicode latin-1 letters, basic european diacritics */
      @font-face {
       font-family: 'RecVar';
       font-style: oblique 0deg 15deg;
       font-weight: 300 1000;
       font-display: optional;
       src: url(<?php $site->url(); ?>'/assets/fonts/Recursive_VF_1.085--subset_range_latin_1.woff2') format('woff2');
       unicode-range: U+00C0-00FF;
      }

      /* unicode latin-1, punc/symbols & arrows (↔ ↕ ↖ ↗ ↘ ↙) */
      @font-face {
       font-family: 'RecVar';
       font-style: oblique 0deg 15deg;
       font-weight: 300 1000;
       font-display: optional;
       src: url(<?php $site->url(); ?>'/assets/fonts/Recursive_VF_1.085--subset_range_latin_1_punc.woff2') format('woff2');
       unicode-range: U+00A0-00A8,U+00AA-00BF,U+2194-2199;
      }

      /* unicode latin A extended */
      @font-face {
       font-family: 'RecVar';
       font-style: oblique 0deg 15deg;
       font-weight: 300 1000;
       font-display: optional;
       src: url(<?php $site->url(); ?>'/assets/fonts/Recursive_VF_1.085--subset_range_latin_ext.woff2') format('woff2');
       unicode-range: U+0100-017F;
      }
    </style>
    <?= css([
      'assets/styles/main-min.css',
    ]) ?>
    <script>
      // --- Early script to prevent flash of wrong theme ---
      (function() {
        const savedTheme = localStorage.getItem("theme-preference");
        const systemDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
        const theme = savedTheme === "system" || !savedTheme
          ? (systemDark ? "dark" : "light")
          : savedTheme;

        document.documentElement.setAttribute("data-theme", theme);
      })();
    </script>
  </head>
  <body class="wrapper">
    <header>
      <section class="masthead">
        <?= asset('assets/svg/brandmark.svg')->read() ?>️
        <h1>Poet & Scribe</h1>
      </section>
      <p class="lede">
        Helping teams shape accessible web products, thoughtfully built to grow.
      </p>

    </header>
    <main>
      <article class="flow">
        <section id="about">
          <h2>About us</h2>
          <p>Poet & Scribe was founded in 2022 by Sandra Ibañez — senior quality specialist & product lead — and Jonathan Stephens — principal designer & product/tech director.</p>
          <p style="--measure:50ch;">We work directly with your team, alongside agencies, or teaming with indie partners, depending on need.</p>
        </section>
        <hr/>
        <section id="services">
          <h2>What we do</h2>
          <p>We specialize in design systems and product strategy — whether you're establishing foundations, scaling what's working, or untangling what isn't. </p>

          <h3>Design systems</h3>
          <p>Fixing disjointed user interfaces? Improving internal efficiency? Building resilience into products? We've got your back.</p>
          <p>We create <a href="https://designsystem.university/articles/what-is-a-design-system" title="A post by Dan Mall of Design Systems University defining six different types of design systems">all types of design systems</a> that're comprehensive and clear, delivering compounding value to users & your bottom line.</p>

          <p>Currently available for short-to-mid-term projects.</p>

          <h3>Product strategy</h3>
          <p>We’ve worked in product development throughout our careers — from decades of scaling an international enterprise to consulting agencies, start-ups, and governments.</p>
          <p>Each organization is unique, with their own rhythms of growth and scale. We focus on understanding <em>your</em> context, co-creating paths forward together.</p>
          <p>If you’re looking for direction, optimizing features, or scaling a product, we offer consultancy & coaching sessions to support you.</p>

          <h3>Can’t find what you need?</h3>
          <p>We’re happy to chat, even if the topic doesn't align <em>exactly</em> with what's listed above. We have breadth of skill & experience that can be put to use.</p>
          <p class="balance">If we are unable to help, <wbr/>we’ll work to connect you with allies that can.</p>

          <h2 id="past">Who we’ve worked with</h2>
          <p>We’ve built our careers working with digital product teams of diverse compositions & missions, including:</p>
          <ul>
            <li>Booking.com</li>
            <li>United States' Space Force</li>
            <li>Leantime.io</li>
            <li>Strategi Consulting</li>
            <li>Trailmarks HQ</li>
            <li>Smashing Boxes</li>
          </ul>
        </section>
        <hr/>
        <section id="approach">
          <h2>Our approach</h2>
          <p><strong>Poet & Scribe</strong> isn't just our name, it defines how we work.</p>

          <p>Poets take what’s hard to express and find language for it. They're sense-makers of meaning, giving form to abstract thoughts & feeling.</p>

          <p>Scribes preserve knowledge, translating it into collective memory. They're context-builders, shaping how humans gather & scale beyond any one individual's contribution.</p>

          <p><strong>In product development,</strong> it's much of the same: translating user research into strategy, strategy into systems, and systems into delivery practices — weaving alignment throughout.</p>

          <p>We help teams build that capacity.</p>
          <p>We work to understand where you’ve been, what you’ve learned, and what you’re actually trying to build. <em>Then,</em> we map potential paths to keep moving forward.</p>


        <h3 id="principles">Guiding principles</h3>
          <p>If you want to work with disruptors, trend-setters, wand-wavers, rockstars, or thing-breakers — that's not us.</p>
          <p>These are more us <strong>↓</strong> 
          <ul>
            <li>
              <p><strong>Coalitions over competition.</strong>
              Collective strength and collaboration instead of individual genius.</p>
            </li>
            <li>
              <p><strong>Spectrums over binaries.</strong>
              Context and gradation instead of either/or thinking.</p>
            </li>
            <li>
              <p><strong>Curiosity over assumptions.</strong>
              Asking questions and staying open instead of prescribing answers.</p>
            </li>
            <li>
              <p><strong>Care over exploitation.</strong>
              Protecting wellbeing and sustainability instead of maximizing extraction.</p>
            </li>
            <li>
              <p><strong>Transparency over obscurity.</strong>
              Making decisions and processes visible instead of keeping them hidden.</p>
            </li>
          </ul>
        </section>
        <hr/>
        <section id="cta">
          <h2>Let’s talk</h2>
          <p>If you’re interested in the support we offer, we’d love to chat</p>

          <p>Email us at:
            <button
              type="button"
              class="email-copy-btn"
              id="emailCopyBtn"
              aria-label="Copy email address to clipboard">
              <?= asset('assets/svg/file-copy-line.svg')->read() ?>️
              <span class="email-text">us@poetandscribe.com</span>
            </button>
          <span class="popover" role="status" aria-live="polite"></span>
          </p>
        </section>
      </article>
    </main>
    <footer class="flow">
      <p class="status">
        <?= asset('assets/svg/hourglass-fill.svg')->read() ?>️
        Now booking 2026 engagements
      </p>
      <div class="theme-toggle" role="group" aria-label="Theme selector">
        <button class="theme-btn" data-theme-value="system" aria-pressed="false" title="Use system theme">
          <?= asset('assets/svg/computer-line.svg')->read() ?>️<span class="visually-hidden">System</span>
        </button>
        <button class="theme-btn" data-theme-value="light" aria-pressed="false" title="Use light mode">
          <?= asset('assets/svg/sun-line.svg')->read() ?>️<span class="visually-hidden">Light</span>
        </button>
        <button class="theme-btn" data-theme-value="dark" aria-pressed="false" title="Use dark mode">
          <?= asset('/assets/svg/moon-line.svg')->read() ?>️<span class="visually-hidden">Dark</span>
        </button>
      </div>
      <details class="colophon">
        <summary><h2>Colophon</h2></summary>
        <div class="content">
          <p>Designed & built by <a href="https://jonathanstephens.us">Jonathan Stephens</a> using <a href="https://atom-editor.cc/">Atom</a>, <a href="https://codekitapp.com/">CodeKit</a>, and <a href="https://github.com/">Github</a>.</p>
          <p>The type is set in free and open source variable fonts, <a href="https://ateliertriay.github.io/bricolage/">Bricolage Grotesque</a> & <a href="https://www.recursive.design/">Recursive Sans & Mono</a> designed by <a href="https://www.mathieutriay.com/">Mathieu Triay</a> and <a href="https://www.arrowtype.com/">Arrow Type</a>, respectively.</p>
          <p>Built with <abbr title="Hypertext Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr>, Javascript; powered by <a href="https://getkirby.com">Kirby <abbr title="Content Management System">CMS</abbr></a>; hosted on <a href="https://hosting.com/">Hosting.com</a>.</p>
          <p>This site is cleaner than 92% of webpages globally, with<br/> 0.05 g of CO<sub>2</sub>/view. Measured by <a href="https://www.websitecarbon.com/website/poetandscribe-com/">Website Carbon</a>.
          <p>Built in Raleigh, North Carolina.</p>

          <ul class="palette">
            <li><a href="https://contrast-grid.eightshapes.com/?version=1.1.0&background-colors=&foreground-colors=%23F9F9F4%2C%20theme-lightest%0D%0A%23E0DFAD%2C%20theme-lighter%0D%0A%23A4B87B%2C%20theme-light%0D%0A%234F993C%2C%20theme-mid%0D%0A%23088D66%2C%20theme-dark%0D%0A%23025B54%2C%20theme-darker%0D%0A%230F2933%2C%20theme-darkest&es-color-form__tile-size=compact&es-color-form__show-contrast=aaa&es-color-form__show-contrast=aa&es-color-form__show-contrast=aa18">Contrasts:</a></li>
            <li>-est</li>
            <li>-er</li>
            <li>lght</li>
            <li>mid</li>
            <li>dark</li>
            <li>-er</li>
            <li>-est</li>
          </ul>
        </div>
      </details>
    </footer>
    <script>
    const emailCopyBtn = document.getElementById('emailCopyBtn');
    const popover = document.querySelector('.popover');
    const email = 'hello@poetandscribe.com';

    emailCopyBtn.addEventListener('click', async () => {
      try {
        await navigator.clipboard.writeText(email);
        popover.textContent = 'Copied!';
        popover.classList.add('show');
        setTimeout(() => {
          popover.classList.remove('show');
        }, 2000);
      } catch (err) {
        // Fallback for older browsers
        const textArea = document.createElement('textarea');
        textArea.value = email;
        textArea.style.position = 'fixed';
        textArea.style.left = '-999999px';
        document.body.appendChild(textArea);
        textArea.select();
        try {
          document.execCommand('copy');
          popover.textContent = 'Copied!';
          popover.classList.add('show');
          setTimeout(() => {
            popover.classList.remove('show');
          }, 2000);
        } catch (fallbackErr) {
          popover.textContent = 'Failed to copy';
          popover.classList.add('show');
          setTimeout(() => {
            popover.classList.remove('show');
          }, 2000);
        }
        document.body.removeChild(textArea);
      }
    });
  </script>
    <script>
      const themeButtons = document.querySelectorAll(".theme-btn");
      const systemQuery = window.matchMedia("(prefers-color-scheme: dark)");
      const root = document.documentElement;

      function applyTheme(theme) {
        if (theme === "system") {
          const isDark = systemQuery.matches;
          root.setAttribute("data-theme", isDark ? "dark" : "light");
        } else {
          root.setAttribute("data-theme", theme);
        }
        localStorage.setItem("theme-preference", theme);
        updatePressedState(theme);
      }

      function updatePressedState(theme) {
        themeButtons.forEach(btn => {
          btn.setAttribute("aria-pressed", btn.dataset.themeValue === theme);
        });
      }

      // Watch for system changes if “system” mode is active
      systemQuery.addEventListener("change", () => {
        const saved = localStorage.getItem("theme-preference");
        if (saved === "system") applyTheme("system");
      });

      // Watch for localStorage changes (multi-tab sync)
      window.addEventListener("storage", e => {
        if (e.key === "theme-preference") applyTheme(e.newValue || "system");
      });

      // Event listeners for buttons
      themeButtons.forEach(btn => {
        btn.addEventListener("click", () => applyTheme(btn.dataset.themeValue));
      });

      // Initialize from saved preference
      applyTheme(localStorage.getItem("theme-preference") || "system");
    </script>
  </body>
</html>
