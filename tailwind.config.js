/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js', 
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        body: ["Roboto", "sans-serif"], // add name of your font family import
      },
      colors: {
        // input
        inputbg: "#d8ddef",
        inputbgd: "#3D3D3D",
        inputerror: "#000000",
        inputerrord: "#000000",
        inputiconfront: "#000000",
        inputiconfrontd: "#000000",

        // label
        labelinput: "#000000",
        labelinputd: "#000000",

        // link
        linkiconarrow: '#000000',
        linkiconarrowd: '#000000',
        linktextsample: '#000000',
        linktextsampled: '#000000',

        // btn
        // form
        tbtnform: "#ffffff",
        tbtnformh: "#000000",
        tbtnformd: "#000000",
        tbtnformhd: "#000000",
        bgbtnform: "#000000",
        bgbtnformh: "#000000",
        bgbtnformd: "#000000",
        bgbtnformhd: "#000000",
        // sample
        tbtnsample: "#000000",
        tbtnsampleh: "#000000",
        tbtnsampled: "#000000",
        tbtnsamplehd: "#000000",
        bgbtnsample: "#000000",
        bgbtnsampleh: "#000000",
        bgbtnsampled: "#000000",
        bgbtnsamplehd: "#000000",
      },
      fontSize: {
        // title
        "h1": "6rem",
        "h2": "5rem",
        "h3": "4rem",
        "h4": "3rem",
        "h5": "2rem",
        "h6": "1rem",

        // text error input
        "s-inputerror": "0.688rem",

        // label
        "s-labelinput": "1rem",

        // link
        "s-linkiconarrow": "1rem",
        "s-linktextsample": "1rem",

        // btn
        "s-btnform": "1rem",
        "s-btnsample": "1rem",
      },
    },
  },
  plugins: [],
}
