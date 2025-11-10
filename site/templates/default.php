<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Poet & Scribe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      @font-face {
        font-family: 'Bricolage Grotesque';
        src:
          url(<?php $site->url(); ?>'/assets/fonts/BricolageGrotesque.woff2') format('woff2-variations');
        font-weight: 200 800;
        font-stretch: 75% 100%;
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
       font-display: swap;
       src: url(<?php $site->url(); ?>'/assets/fonts/Recursive_VF_1.085--subset_range_latin_1.woff2') format('woff2');
       unicode-range: U+00C0-00FF;
      }

      /* unicode latin-1, punc/symbols & arrows (↔ ↕ ↖ ↗ ↘ ↙) */
      @font-face {
       font-family: 'RecVar';
       font-style: oblique 0deg 15deg;
       font-weight: 300 1000;
       font-display: swap;
       src: url(<?php $site->url(); ?>'/assets/fonts/Recursive_VF_1.085--subset_range_latin_1_punc.woff2') format('woff2');
       unicode-range: U+00A0-00A8,U+00AA-00BF,U+2194-2199;
      }

      /* unicode latin A extended */
      @font-face {
       font-family: 'RecVar';
       font-style: oblique 0deg 15deg;
       font-weight: 300 1000;
       font-display: swap;
       src: url(<?php $site->url(); ?>'/assets/fonts/Recursive_VF_1.085--subset_range_latin_ext.woff2') format('woff2');
       unicode-range: U+0100-017F;
      }
    </style>
    <?= css([
      'assets/styles/main.css',
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
        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" title="Brandmark">
          <description>Horizontally & vertically flipped, circularly encased ampersand figureground.</description>
          <circle class="circle" cx="32" cy="32" r="32" fill="var(--theme-darkest)"/>
          <path class="shape" d="M21.318 14.154C23.3287 14.154 25.2813 14.6373 27.176 15.604C29.032 16.5707 30.7913 17.866 32.454 19.49C34.1167 21.1527 35.6247 22.9893 36.978 25C38.3313 27.0493 39.5107 29.1567 40.516 31.322C41.5213 33.526 42.2947 35.672 42.836 37.76C43.3773 39.848 43.648 41.7427 43.648 43.444C43.648 45.3387 43.2807 47.0787 42.546 48.664C41.7727 50.288 40.6127 51.5833 39.066 52.55C37.4807 53.5167 35.47 54 33.034 54C30.83 54 28.974 53.594 27.466 52.782C25.958 52.0087 24.8173 50.9647 24.044 49.65C23.232 48.3353 22.826 46.866 22.826 45.242C22.826 43.9273 23.1353 42.6513 23.754 41.414C24.334 40.2153 25.3393 39.1133 26.77 38.108C28.2007 37.1027 30.134 36.2713 32.57 35.614L33.034 36.6C31.4873 37.8373 30.3853 39.0553 29.728 40.254C29.032 41.4913 28.684 42.7673 28.684 44.082C28.684 45.4353 29.0513 46.576 29.786 47.504C30.482 48.432 31.5453 48.896 32.976 48.896C34.02 48.896 34.8707 48.6447 35.528 48.142C36.1853 47.678 36.6687 47.0207 36.978 46.17C37.2487 45.358 37.384 44.43 37.384 43.386C37.384 42.1487 37.1713 40.6987 36.746 39.036C36.3207 37.3733 35.7407 35.6527 35.006 33.874C34.2327 32.0953 33.3433 30.3553 32.338 28.654C31.3327 26.9527 30.2307 25.406 29.032 24.014C27.8333 22.6607 26.596 21.578 25.32 20.766C24.0053 19.954 22.6907 19.548 21.376 19.548C20.2933 19.548 19.4427 19.8187 18.824 20.36C18.1667 20.94 17.838 21.6747 17.838 22.564C17.838 23.5307 18.2053 24.478 18.94 25.406C19.636 26.334 20.6607 27.1653 22.014 27.9C23.3287 28.6733 24.9527 29.2533 26.886 29.64V35.15H13.488V30.278L24.044 31.728V30.568C20.0613 29.8333 17.1227 28.6927 15.228 27.146C13.3333 25.5993 12.386 23.6853 12.386 21.404C12.386 20.0507 12.676 18.8907 13.256 17.924C13.836 16.996 14.59 16.2613 15.518 15.72C16.446 15.1787 17.432 14.792 18.476 14.56C19.4813 14.2893 20.4287 14.154 21.318 14.154ZM41.966 14.154C43.938 14.154 45.6973 14.5213 47.244 15.256C48.752 16.0293 49.9313 17.0927 50.782 18.446C51.594 19.838 52 21.4427 52 23.26C52 24.884 51.6713 26.3147 51.014 27.552C50.318 28.7893 49.4093 29.814 48.288 30.626C47.128 31.4767 45.8327 32.1533 44.402 32.656C42.9713 33.1973 41.5213 33.5647 40.052 33.758L39.762 32.25C41.8113 31.322 43.3773 30.2007 44.46 28.886C45.504 27.61 46.026 26.218 46.026 24.71C46.026 23.5887 45.7747 22.564 45.272 21.636C44.7693 20.7467 44.0347 20.0313 43.068 19.49C42.0627 18.9873 40.8447 18.736 39.414 18.736C38.0993 18.736 36.92 19.0067 35.876 19.548C34.832 20.0893 33.846 20.8047 32.918 21.694L31.468 19.49H32.86C33.44 18.4073 34.1553 17.46 35.006 16.648C35.8567 15.8747 36.862 15.2753 38.022 14.85C39.1433 14.386 40.458 14.154 41.966 14.154Z" fill="var(--theme-lightest)"/>
        </svg>
        <h1>Poet & Scribe</h1>
      </section>
      <p class="lede">Helping teams shape accessible web products, thoughtfully built to grow.</p>
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

          <p>Currently <span class="capacity status">available</span> for <wbr/>short-to-mid-term projects.</p>

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
          <p><strong>Poet & Scribe isn't just our name,</strong> it defines how we work.</p>

          <p>Poets take what’s hard to express and find language for it. They're sense-makers of meaning, giving form to abstract thoughts & feeling.</p>

          <p>Scribes preserve knowledge, translating it into collective memory. They're context-builders, shaping how humans gather & scale beyond any one individual's contribution.</p>

          <p><strong>In product development, it's much of the same:</strong> translating user research into strategy, strategy into systems, and systems into delivery practices — weaving alignment throughout.</p>

          <p>We help teams build that capacity.</p>
          <p>We work to understand where you’ve been, what you’ve learned, and what you’re actually trying to build. <em>Then,</em> we map potential paths to keep moving forward.</p>

        <h3 id="principles">Guiding principles</h3>
          <p>If you want to work with disruptors, trend-setters, wand-wavers, rockstars, or thing-breakers — that's not us.</p>
<p>These are more us <strong>↓</strong> 
          <ul>
            <li>
              <p><em>Coalitions over competition.</em>
              Collective strength and collaboration instead of individual genius.</p>
            </li>
            <li>
              <p><em>Spectrums over binaries.</em>
              Context and gradation instead of either/or thinking.</p>
            </li>
            <li>
              <p><em>Curiosity over assumptions.</em>
              Asking questions and staying open instead of prescribing answers.</p>
            </li>
            <li>
              <p><em>Care over exploitation.</em>
              Protecting wellbeing and sustainability instead of maximizing extraction.</p>
            </li>
            <li>
              <p><em>Transparency over obscurity.</em>
              Making decisions and processes visible instead of keeping them hidden.</p>
            </li>
          </ul>
        </section>
        <hr/>
        <section id="cta">
          <h2>Let’s talk</h2>
          <p>If you’re interested in the support we offer, we’d love to chat</p>

          <p>Email us at: <a href="mailto:hello@poetandscribe.com" class="email-link" id="emailLink">hello@poetandscribe.com</a>
            <button
              type="button"
              class="copy-btn"
              id="copyBtn"
              aria-label="Copy email address to clipboard"
            ><?= asset('assets/svg/file-copy-line.svg')->read() ?>️
            <span class="popover" role="status" aria-live="polite"></span>
          </button>
          </p>
        </section>
      </article>
    </main>
    <footer class="flow">
      <p class="wrapper">Thanks for visiting.</p>
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
          <p>Powered by <a href="https://getkirby.com">Kirby CMS</a>, hosted by <a href="https://hosting.com/">Hosting.com</a>.</p>
          <p>Built in Raleigh, North Carolina, one week in November 2025.</p>

          <ul class="palette">
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
    const copyBtn = document.getElementById('copyBtn');
    const emailLink = document.getElementById('emailLink');
    const popover = document.querySelector('.popover');

    copyBtn.addEventListener('click', async () => {
      // Extract email from the mailto: link
      const email = emailLink.href.replace('mailto:', '');

      try {
        await navigator.clipboard.writeText(email);

        // Show success message
        popover.textContent = 'Copied!';
        popover.classList.add('show');

        // Hide after 2 seconds
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
    });</script>
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
