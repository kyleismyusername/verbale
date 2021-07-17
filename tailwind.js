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
            padding: '1rem',
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
                // indigo: {
                //     100: "#dbdede",
                //     200: "#b6bdbc",
                //     300: "#929c9b",
                //     400: "#6d7b79",
                //     500: "#495a58",
                //     600: "#3a4846",
                //     700: "#2c3635",
                //     800: "#1d2423",
                //     900: "#0f1212"
                // },
                indigo: {
                    100: "#dde1e5",
                    200: "#bbc3ca",
                    300: "#98a6b0",
                    400: "#768895",
                    500: "#435562",
                    600: "#435562",
                    700: "#32404a",
                    800: "#222a31",
                    900: "#111519"
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
                darkpurple: {
                    100: "#d3cfd3",
                    200: "#a7a0a7",
                    300: "#7b707b",
                    400: "#4f414f",
                    500: "#231123",
                    600: "#1c0e1c",
                    700: "#150a15",
                    800: "#0e070e",
                    900: "#070307"
                },
                sienna: {
                    100: "#dad2d3",
                    200: "#b6a5a7",
                    300: "#91777c",
                    400: "#6d4a50",
                    500: "#481d24",
                    600: "#3a171d",
                    700: "#2b1116",
                    800: "#1d0c0e",
                    900: "#0e0607"
                },
            },
            fontSize: {
                xxs: '0.675rem',
            },
            lineHeight: {
                tighter: '1.125',
            },
            height: theme => ({
                "screen/2": "50vh"
            }),
            width: {
                fit: 'fit-content'
            },
            typography: {
                DEFAULT: {
                    css: {
                        maxWidth: 'auto',
                        fontSize: '1rem',
                        color: '#435562',
                        a: {
                            color: '#d4967d',
                            textDecoration: 'none',
                            fontWeight: '600',
                            '&:hover': {
                                color: '#4a4a4a',
                            },
                        },
                        h1: {
                            // fontSize: '3rem',
                            fontWeight: '300',
                            color: '#435562',
                        },
                        h2: {
                            fontWeight: '400',
                            color: '#435562',
                        },
                        h3: {
                            color: '#435562',
                        },
                        h4: {
                            color: '#435562',
                        },
                        h5: {
                            color: '#435562',
                        },
                        h6: {
                            color: '#435562',
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
                        },
                        blockquote: {
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
