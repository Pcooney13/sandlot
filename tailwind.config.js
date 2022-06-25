module.exports = {
  content: ["./**/*.{php,html,js}", "./*.php", "./templates/blocks/*.php"],
  safelist: [
    {
      pattern: /(bg|text)-(red|orange|yellow|lime|green|cyan|blue|indigo|fuchsia)-(300|400|500|600)/,
      variants: ["hover", "group-hover"],
    },
    {
      pattern: /(pt|pb)-(4|8|12|16|20|24|28|32)/,
    },
    {
      pattern: /(max)-w-(xs|sm|md|lg|xl|2xl)/,
      variants: ["md"],
    },
  ],
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
        primary: "#29385c",
        "off-white": "#F2F2F2",
        "light-gray": "#DDDDDD",
        "cool-gray": "#a0aec0",
        "orange-50": "rgba(249, 115, 22, 0.5)",
        "purple-50": "rgba(168, 85, 247, 0.5)",
        "teal-50": "rgba(20, 184, 166, 0.5) ",
        "bright-navy": "#38bdf8",
        "bright-teal": "#99f6e4",
        "bright-purple": "#f0abfc",
        overlay: "rgba(255,255,255, 0.125)",
        "bright-orange": "#ffb600",
        "light-orange": "#fed7aa",
        "light-blue": "#c6daff",
      },
      width: {
        "1/6": "16.666667%",
      },
      aspectRatio: {
        hero: "5 / 2",
        image: "4 / 3",
        blog: "12 / 5",
      },
      backgroundSize: {
        200: "200%",
      },
      lineHeight: {
        'blog': '1.625',
      }
    },
  },
  plugins: [],
};
