/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["../../*.{html,php,js}","../../templates-parts/*.{html,php,js}",],
  theme: { 
    screens: {
      'sm':{'min':'640px', 'max':'767'},
      'md': {'min':'768px', 'max':'1023'},
      'lg': {'min':'1024px', 'max':'1279'},
      'xl': {'min':'1280px', 'max':'1535'},
      '2xl': {'min':'1536px'},
      'xs':{'min':'320px', 'max':'567'}
      },    
    extend: {
            
      font: {
        "avenir-next-lt-pro-bold": ["Avenir Next LT Pro", "sans-serif", "bold"],
        "avenir-next-lt-pro-regular": ["Avenir Next LT Pro", "sans-serif", "normal"],
        "unbounded-bold": ["Unbounded", "sans-serif", "bold"],
        "unbounded-medium": ["Unbounded", "sans-serif", "medium"],
      },         
  },
  plugins: [],
}}




