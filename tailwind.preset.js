/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [],
  darkMode: ['class'],
  theme: {
    extend: {
      colors: {
        'lw-sky': {
          100: '#e0f2fe',
          800: '#075985',
          200: '#bae6fd',
        },
        'lw-emerald': {
          100: '#d1fae5',
          800: '#065f46',
          200: '#a7f3d0',
        },
        'lw-amber': {
          100: '#fef3c7',
          900: '#78350f',
          200: '#fde68a',
        },
        'lw-rose': {
          100: '#ffe4e6',
          800: '#9f1239',
          200: '#fecdd3',
        },
        'lw-slate': {
          100: '#e2e8f0',
          800: '#1e293b',
          200: '#cbd5e1',
        },
      },
      borderRadius: {
        pill: '9999px',
      },
      boxShadow: {
        focus: '0 0 0 3px rgba(14, 165, 233, 0.25)',
      },
    },
  },
  plugins: [],
};
