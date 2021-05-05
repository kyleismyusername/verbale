module.exports = {
    future: {
        removeDeprecatedGapUtilities: true,
        purgeLayersByDefault: true,
    },
    purge: [
        './*.php',
        './templates/**/*.php',
        './build/js/**/*.js',
    ],
    theme: {
        container: {
            center: true,
            padding: '4vw',
            screens: {
                sm: "400px",
                md: "648px",
                lg: "1024px",
                xl: "1204px"
            }
        },
        fontFamily: {
            serif: ["Noto Serif", "serif"],
            sans: ["Pontano Sans", "sans"],
        },
        extend: {
            colors: {
                link: {
                    'default': '#3182ce',
                    'hover': '#63b3ed',
                },
                salmon: {
                    100: "#f6eae5",
                    200: "#eed5cb",
                    300: "#e5c0b1",
                    400: "#ddab97",
                    500: "#d4967d",
                    600: "#aa7864",
                    700: "#7f5a4b",
                    800: "#553c32",
                    900: "#2a1e19"
                },
                indigo: {
                    100: "#dbdede",
                    200: "#b6bdbc",
                    300: "#929c9b",
                    400: "#6d7b79",
                    500: "#495a58",
                    600: "#3a4846",
                    700: "#2c3635",
                    800: "#1d2423",
                    900: "#0f1212"
                },
                tan: {
                    100: "#f8f7f6",
                    200: "#f1f0ec",
                    300: "#eae8e3",
                    400: "#e3e1d9",
                    500: "#dcd9d0",
                    600: "#b0aea6",
                    700: "#84827d",
                    800: "#585753",
                    900: "#2c2b2a"
                },
                gray: {
                    100: "#d9dbdb",
                    200: "#b2b7b6",
                    300: "#8c9292",
                    400: "#656e6d",
                    500: "#3f4a49",
                    600: "#323b3a",
                    700: "#262c2c",
                    800: "#191e1d",
                    900: "#0d0f0f"
                },
            },
            fontSize: {
                xxs: '0.675rem',
            },
            lineHeight: {
                tighter: '1.125',
            },
            typography: {
                DEFAULT: {
                    css: {
                        maxWidth: 'auto',
                        fontSize: '1rem',
                        color: '#3f4a49',
                        a: {
                            color: '#159D99',
                            textDecoration: 'none',
                            fontWeight: '600',
                            '&:hover': {
                                color: '#4a4a4a',
                            },
                        },
                        h1: {
                            // fontSize: '3rem',
                            fontWeight: '300',
                            color: '#3f4a49'
                        },
                        h2: {
                            fontWeight: '400',
                            color: '#3f4a49'
                        },
                        h3: {
                            color: '#3f4a49'
                        },
                        h4: {
                            color: '#3f4a49'
                        },
                        h5: {
                            color: '#3f4a49'
                        },
                        h6: {
                            color: '#3f4a49'
                        },
                        pre: {
                            backgroundColor: '#3f3e3b',
                            color: '#ffffff',
                        },
                        ul: {
                            li: ['before']
                        },
                        strong: {
                            color: 'inherit'
                        }
                    },
                },
            },
        }
    },
    variants: {
        textColor: ['responsive', 'hover', 'focus', 'visited'],
    },
    plugins: [
        ({ addUtilities }) => {
            const utils = {
                '.translate-x-half': {
                    transform: 'translateX(50%)',
                },
            };
            addUtilities(utils, ['responsive'])
        },
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ]
};
