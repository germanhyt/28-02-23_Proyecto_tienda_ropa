/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/*.{html,php}",
    "./pages/**/*.{html,php}",
    "./pages/**/**/*.{html,php}",
    "./components/*.{html,php}",
    "./components/**/*.{html,php}",
    "*.{html,php}",
  ],
  theme: {
    fontFamily: {
      sans: ["Montserrat", "sans-serif"],
      cardo: ["Cardo", "serif"],
    },
    extend: {
      colors: {
        "primary-100": "#EB0183",
        "primary-200": "#FFC3A9",
        "primary-300": "#000051",
        "primary-400": "#F2F2F2",
        // PARA DETALLE DE PRODUCTO
        "negro": "#000000",
        "rosado": "#ff007f",
        "gris-claro": "#D3D3D3",
        "beige": "#f5f5dc",
        "blanco": "#ffffff",
        "cafe": "#54483B",
        "marron": "#804000",
        "caramelo": "#C19A6B",
        "rosa-celeste": "#B2FFFF"
      },
      container: {
        center: true,
        padding: {
          DEFAULT: "1rem",
          md: "4rem",
        },
      },
      fontSize: {
        "dynamic-des": "font-size: clamp(0,625rem, NaNvw - NaNrem, 1,5rem);",
      },
      borderRadius: {},
    },
  },

  variants: {
    extend: {
      display: ["group-focus"],
    },
  },
  plugins: [],
};
