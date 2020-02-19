module.exports = {
	"env": {
        "browser": true,
        "jquery":true
    },
    globals:{
        JQuery: false,
        $: false,
    },
    "extends": "eslint:recommended",
    "rules": {
        "indent": [2, 4],
        "semi": [2, "always"],
        "no-debugger": 0,
        "no-extra-boolean-cast": 2,
        "no-proto": 2,
        "block-spacing":[1, "never"],
        "linebreak-style": [1, "unix"],
        "jsx-quotes": 0,
        "space-before-function-paren": [2, "always"],
        "space-in-parens": [2, "never"],
        "space-infix-ops": 2,
        "space-unary-ops": [2, {"words": true, "nonwords": false}]
    }
};