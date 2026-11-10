/* mygreenlawn — interactions */
(function () {
  "use strict";

  /* ---------- Mobile navigation ---------- */
  const header = document.querySelector(".site-header");
  const navToggle = document.querySelector(".nav-toggle");
  const navWrap = document.getElementById("site-nav");

  function setNav(open) {
    if (!header || !navToggle) return;
    header.classList.toggle("nav-open", open);
    navToggle.setAttribute("aria-expanded", String(open));
    navToggle.setAttribute("aria-label", open ? "Close menu" : "Open menu");
  }

  if (navToggle) {
    navToggle.addEventListener("click", function () {
      setNav(!header.classList.contains("nav-open"));
    });
  }

  if (navWrap) {
    navWrap.addEventListener("click", function (event) {
      if (event.target.closest("a")) setNav(false);
    });
  }

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") setNav(false);
  });

  window.addEventListener("resize", function () {
    if (window.innerWidth > 1024) setNav(false);
  });

  const onScroll = function () {
    if (header) header.classList.toggle("is-scrolled", window.scrollY > 8);
  };
  onScroll();
  window.addEventListener("scroll", onScroll, { passive: true });

  /* ---------- Season tabs ---------- */
  const tabs = Array.from(document.querySelectorAll(".season-tab"));

  function selectTab(tab, focus) {
    tabs.forEach(function (item) {
      const selected = item === tab;
      item.setAttribute("aria-selected", String(selected));
      item.tabIndex = selected ? 0 : -1;
      const panel = document.getElementById(item.getAttribute("aria-controls"));
      if (panel) panel.hidden = !selected;
    });
    if (focus) tab.focus();
  }

  tabs.forEach(function (tab, index) {
    tab.addEventListener("click", function () {
      selectTab(tab, false);
    });

    tab.addEventListener("keydown", function (event) {
      let next = null;
      if (event.key === "ArrowRight" || event.key === "ArrowDown") {
        next = tabs[(index + 1) % tabs.length];
      } else if (event.key === "ArrowLeft" || event.key === "ArrowUp") {
        next = tabs[(index - 1 + tabs.length) % tabs.length];
      } else if (event.key === "Home") {
        next = tabs[0];
      } else if (event.key === "End") {
        next = tabs[tabs.length - 1];
      }
      if (next) {
        event.preventDefault();
        selectTab(next, true);
      }
    });
  });

  /* ---------- Watering calculator ---------- */
  const areaInput = document.getElementById("calc-area");
  const inchesInput = document.getElementById("calc-inches");
  const sessionsInput = document.getElementById("calc-sessions");
  const areaOut = document.getElementById("area-out");
  const inchesOut = document.getElementById("inches-out");
  const resultWeek = document.getElementById("result-week");
  const resultSession = document.getElementById("result-session");

  function formatNumber(value) {
    return Math.round(value).toLocaleString("en-US");
  }

  function updateCalculator() {
    if (!areaInput || !inchesInput || !sessionsInput) return;

    const area = Number(areaInput.value);
    const inches = Number(inchesInput.value);
    const sessions = Math.max(1, Number(sessionsInput.value));
    const gallonsWeek = area * inches * 0.623;

    if (areaOut) areaOut.textContent = formatNumber(area) + " sq ft";
    if (inchesOut) inchesOut.textContent = inches.toFixed(1) + " in";
    if (resultWeek) resultWeek.textContent = formatNumber(gallonsWeek);
    if (resultSession) resultSession.textContent = formatNumber(gallonsWeek / sessions);
  }

  [areaInput, inchesInput, sessionsInput].forEach(function (input) {
    if (input) {
      input.addEventListener("input", updateCalculator);
      input.addEventListener("change", updateCalculator);
    }
  });
  updateCalculator();

  /* ---------- Checklist with local storage ---------- */
  const STORAGE_KEY = "mygreenlawn.checklist.v1";
  const checklist = document.getElementById("checklist");
  const boxes = checklist
    ? Array.from(checklist.querySelectorAll('input[type="checkbox"]'))
    : [];
  const progressBar = document.getElementById("progress-bar");
  const progressTrack = document.getElementById("progress-track");
  const progressLabel = document.getElementById("progress-label");
  const progressPct = document.getElementById("progress-pct");
  const resetButton = document.getElementById("reset-checklist");

  function readState() {
    try {
      const raw = window.localStorage.getItem(STORAGE_KEY);
      const parsed = raw ? JSON.parse(raw) : {};
      return parsed && typeof parsed === "object" ? parsed : {};
    } catch (error) {
      return {};
    }
  }

  function writeState(state) {
    try {
      window.localStorage.setItem(STORAGE_KEY, JSON.stringify(state));
    } catch (error) {
      /* Storage may be unavailable — the checklist still works for this visit. */
    }
  }

  function updateProgress() {
    if (!boxes.length) return;
    const done = boxes.filter(function (box) {
      return box.checked;
    }).length;
    const total = boxes.length;
    const pct = Math.round((done / total) * 100);

    if (progressBar) progressBar.style.width = pct + "%";
    if (progressLabel) progressLabel.textContent = done + " of " + total + " done";
    if (progressPct) progressPct.textContent = pct + "%";
    if (progressTrack) {
      progressTrack.setAttribute("aria-valuenow", String(done));
      progressTrack.setAttribute("aria-valuemax", String(total));
    }
  }

  function saveState() {
    const state = {};
    boxes.forEach(function (box) {
      state[box.dataset.key] = box.checked;
    });
    writeState(state);
    updateProgress();
  }

  if (boxes.length) {
    const saved = readState();
    boxes.forEach(function (box) {
      if (saved[box.dataset.key]) box.checked = true;
      box.addEventListener("change", saveState);
    });
    updateProgress();
  }

  if (resetButton) {
    resetButton.addEventListener("click", function () {
      boxes.forEach(function (box) {
        box.checked = false;
      });
      saveState();
      resetButton.blur();
    });
  }

  /* ---------- Footer year ---------- */
  const year = document.getElementById("year");
  if (year) year.textContent = String(new Date().getFullYear());
})();
