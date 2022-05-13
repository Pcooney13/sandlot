module.exports = {
  content: ["./**/*.{php,html,js}", "./*.php", "./templates/blocks/*.php"],
  theme: {
    fontFamily: {
      gotham: "Gotham",
    },
    fontWeight: {
      thin: "100",
      light: "300",
      normal: "400",
      semibold: "600",
      bold: "700",
    },
    extend: {
      colors: {
        "off-white": "#F2F2F2",
        "light-gray": "#DDDDDD",
        "cool-gray": "#a0aec0",
        orange: "#f37223",
        "bright-orange": "#ffb600",
        "light-orange": "#fed7aa",
        navy: "#29385c",
        "light-blue": "#c6daff",
        "navy-200": "#bcbbc8",
        teal: "#0c7489",
        purple: "#7f5e76",
      },
      width: {
        "1/6": "16.666667%",
      },
      aspectRatio: {
        hero: "5 / 2",
        blog: "3 / 1",
      },
    },
  },
  plugins: [],
};
