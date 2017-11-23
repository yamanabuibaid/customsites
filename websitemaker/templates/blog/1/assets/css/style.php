<?php

$stylesheet_temp = "

@import url('http://localhost/websitemaker/templates/blog/1/assets/css/font-awesome.min.css');

/*
	Fractal by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

/* Reset */

	html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}

	article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
		display: block;
	}

	body {
		line-height: 1;
	}

	ol, ul {
		list-style: none;
	}

	blockquote, q {
		quotes: none;
	}

	blockquote:before, blockquote:after, q:before, q:after {
		content: '';
		content: none;
	}

	table {
		border-collapse: collapse;
		border-spacing: 0;
	}

	body {
		-webkit-text-size-adjust: none;
	}

/* Box Model */

	*, *:before, *:after {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

/* Grid */

	.row {
		border-bottom: solid 1px transparent;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row > * {
		float: left;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row:after, .row:before {
		content: '';
		display: block;
		clear: both;
		height: 0;
	}

	.row.uniform > * > :first-child {
		margin-top: 0;
	}

	.row.uniform > * > :last-child {
		margin-bottom: 0;
	}

	.row.\30 \25 > * {
		padding: 0 0 0 0em;
	}

	.row.\30 \25 {
		margin: 0 0 -1px 0em;
	}

	.row.uniform.\30 \25 > * {
		padding: 0em 0 0 0em;
	}

	.row.uniform.\30 \25 {
		margin: 0em 0 -1px 0em;
	}

	.row > * {
		padding: 0 0 0 1.5em;
	}

	.row {
		margin: 0 0 -1px -1.5em;
	}

	.row.uniform > * {
		padding: 1.5em 0 0 1.5em;
	}

	.row.uniform {
		margin: -1.5em 0 -1px -1.5em;
	}

	.row.\32 00\25 > * {
		padding: 0 0 0 3em;
	}

	.row.\32 00\25 {
		margin: 0 0 -1px -3em;
	}

	.row.uniform.\32 00\25 > * {
		padding: 3em 0 0 3em;
	}

	.row.uniform.\32 00\25 {
		margin: -3em 0 -1px -3em;
	}

	.row.\31 50\25 > * {
		padding: 0 0 0 2.25em;
	}

	.row.\31 50\25 {
		margin: 0 0 -1px -2.25em;
	}

	.row.uniform.\31 50\25 > * {
		padding: 2.25em 0 0 2.25em;
	}

	.row.uniform.\31 50\25 {
		margin: -2.25em 0 -1px -2.25em;
	}

	.row.\35 0\25 > * {
		padding: 0 0 0 0.75em;
	}

	.row.\35 0\25 {
		margin: 0 0 -1px -0.75em;
	}

	.row.uniform.\35 0\25 > * {
		padding: 0.75em 0 0 0.75em;
	}

	.row.uniform.\35 0\25 {
		margin: -0.75em 0 -1px -0.75em;
	}

	.row.\32 5\25 > * {
		padding: 0 0 0 0.375em;
	}

	.row.\32 5\25 {
		margin: 0 0 -1px -0.375em;
	}

	.row.uniform.\32 5\25 > * {
		padding: 0.375em 0 0 0.375em;
	}

	.row.uniform.\32 5\25 {
		margin: -0.375em 0 -1px -0.375em;
	}

	.\31 2u, .\31 2u\24 {
		width: 100%;
		clear: none;
		margin-left: 0;
	}

	.\31 1u, .\31 1u\24 {
		width: 91.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 0u, .\31 0u\24 {
		width: 83.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\39 u, .\39 u\24 {
		width: 75%;
		clear: none;
		margin-left: 0;
	}

	.\38 u, .\38 u\24 {
		width: 66.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\37 u, .\37 u\24 {
		width: 58.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\36 u, .\36 u\24 {
		width: 50%;
		clear: none;
		margin-left: 0;
	}

	.\35 u, .\35 u\24 {
		width: 41.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\34 u, .\34 u\24 {
		width: 33.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\33 u, .\33 u\24 {
		width: 25%;
		clear: none;
		margin-left: 0;
	}

	.\32 u, .\32 u\24 {
		width: 16.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 u, .\31 u\24 {
		width: 8.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\31 2u\24 + *,
	.\31 1u\24 + *,
	.\31 0u\24 + *,
	.\39 u\24 + *,
	.\38 u\24 + *,
	.\37 u\24 + *,
	.\36 u\24 + *,
	.\35 u\24 + *,
	.\34 u\24 + *,
	.\33 u\24 + *,
	.\32 u\24 + *,
	.\31 u\24 + * {
		clear: left;
	}

	.\-11u {
		margin-left: 91.66667%;
	}

	.\-10u {
		margin-left: 83.33333%;
	}

	.\-9u {
		margin-left: 75%;
	}

	.\-8u {
		margin-left: 66.66667%;
	}

	.\-7u {
		margin-left: 58.33333%;
	}

	.\-6u {
		margin-left: 50%;
	}

	.\-5u {
		margin-left: 41.66667%;
	}

	.\-4u {
		margin-left: 33.33333%;
	}

	.\-3u {
		margin-left: 25%;
	}

	.\-2u {
		margin-left: 16.66667%;
	}

	.\-1u {
		margin-left: 8.33333%;
	}

	@media screen and (max-width: 1680px) {

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28xlarge\29, .\31 2u\24\28xlarge\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xlarge\29, .\31 1u\24\28xlarge\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xlarge\29, .\31 0u\24\28xlarge\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xlarge\29, .\39 u\24\28xlarge\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xlarge\29, .\38 u\24\28xlarge\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xlarge\29, .\37 u\24\28xlarge\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xlarge\29, .\36 u\24\28xlarge\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xlarge\29, .\35 u\24\28xlarge\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xlarge\29, .\34 u\24\28xlarge\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xlarge\29, .\33 u\24\28xlarge\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xlarge\29, .\32 u\24\28xlarge\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xlarge\29, .\31 u\24\28xlarge\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xlarge\29 + *,
		.\31 1u\24\28xlarge\29 + *,
		.\31 0u\24\28xlarge\29 + *,
		.\39 u\24\28xlarge\29 + *,
		.\38 u\24\28xlarge\29 + *,
		.\37 u\24\28xlarge\29 + *,
		.\36 u\24\28xlarge\29 + *,
		.\35 u\24\28xlarge\29 + *,
		.\34 u\24\28xlarge\29 + *,
		.\33 u\24\28xlarge\29 + *,
		.\32 u\24\28xlarge\29 + *,
		.\31 u\24\28xlarge\29 + * {
			clear: left;
		}

		.\-11u\28xlarge\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xlarge\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xlarge\29 {
			margin-left: 75%;
		}

		.\-8u\28xlarge\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xlarge\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xlarge\29 {
			margin-left: 50%;
		}

		.\-5u\28xlarge\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xlarge\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xlarge\29 {
			margin-left: 25%;
		}

		.\-2u\28xlarge\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xlarge\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 1280px) {

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28large\29, .\31 2u\24\28large\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28large\29, .\31 1u\24\28large\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28large\29, .\31 0u\24\28large\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28large\29, .\39 u\24\28large\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28large\29, .\38 u\24\28large\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28large\29, .\37 u\24\28large\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28large\29, .\36 u\24\28large\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28large\29, .\35 u\24\28large\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28large\29, .\34 u\24\28large\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28large\29, .\33 u\24\28large\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28large\29, .\32 u\24\28large\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28large\29, .\31 u\24\28large\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28large\29 + *,
		.\31 1u\24\28large\29 + *,
		.\31 0u\24\28large\29 + *,
		.\39 u\24\28large\29 + *,
		.\38 u\24\28large\29 + *,
		.\37 u\24\28large\29 + *,
		.\36 u\24\28large\29 + *,
		.\35 u\24\28large\29 + *,
		.\34 u\24\28large\29 + *,
		.\33 u\24\28large\29 + *,
		.\32 u\24\28large\29 + *,
		.\31 u\24\28large\29 + * {
			clear: left;
		}

		.\-11u\28large\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28large\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28large\29 {
			margin-left: 75%;
		}

		.\-8u\28large\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28large\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28large\29 {
			margin-left: 50%;
		}

		.\-5u\28large\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28large\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28large\29 {
			margin-left: 25%;
		}

		.\-2u\28large\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28large\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 980px) {

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28medium\29, .\31 2u\24\28medium\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28medium\29, .\31 1u\24\28medium\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28medium\29, .\31 0u\24\28medium\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28medium\29, .\39 u\24\28medium\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28medium\29, .\38 u\24\28medium\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28medium\29, .\37 u\24\28medium\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28medium\29, .\36 u\24\28medium\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28medium\29, .\35 u\24\28medium\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28medium\29, .\34 u\24\28medium\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28medium\29, .\33 u\24\28medium\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28medium\29, .\32 u\24\28medium\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28medium\29, .\31 u\24\28medium\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28medium\29 + *,
		.\31 1u\24\28medium\29 + *,
		.\31 0u\24\28medium\29 + *,
		.\39 u\24\28medium\29 + *,
		.\38 u\24\28medium\29 + *,
		.\37 u\24\28medium\29 + *,
		.\36 u\24\28medium\29 + *,
		.\35 u\24\28medium\29 + *,
		.\34 u\24\28medium\29 + *,
		.\33 u\24\28medium\29 + *,
		.\32 u\24\28medium\29 + *,
		.\31 u\24\28medium\29 + * {
			clear: left;
		}

		.\-11u\28medium\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28medium\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28medium\29 {
			margin-left: 75%;
		}

		.\-8u\28medium\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28medium\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28medium\29 {
			margin-left: 50%;
		}

		.\-5u\28medium\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28medium\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28medium\29 {
			margin-left: 25%;
		}

		.\-2u\28medium\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28medium\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 736px) {

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28small\29, .\31 2u\24\28small\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28small\29, .\31 1u\24\28small\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28small\29, .\31 0u\24\28small\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28small\29, .\39 u\24\28small\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28small\29, .\38 u\24\28small\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28small\29, .\37 u\24\28small\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28small\29, .\36 u\24\28small\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28small\29, .\35 u\24\28small\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28small\29, .\34 u\24\28small\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28small\29, .\33 u\24\28small\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28small\29, .\32 u\24\28small\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28small\29, .\31 u\24\28small\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28small\29 + *,
		.\31 1u\24\28small\29 + *,
		.\31 0u\24\28small\29 + *,
		.\39 u\24\28small\29 + *,
		.\38 u\24\28small\29 + *,
		.\37 u\24\28small\29 + *,
		.\36 u\24\28small\29 + *,
		.\35 u\24\28small\29 + *,
		.\34 u\24\28small\29 + *,
		.\33 u\24\28small\29 + *,
		.\32 u\24\28small\29 + *,
		.\31 u\24\28small\29 + * {
			clear: left;
		}

		.\-11u\28small\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28small\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28small\29 {
			margin-left: 75%;
		}

		.\-8u\28small\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28small\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28small\29 {
			margin-left: 50%;
		}

		.\-5u\28small\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28small\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28small\29 {
			margin-left: 25%;
		}

		.\-2u\28small\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28small\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 480px) {

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28xsmall\29, .\31 2u\24\28xsmall\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xsmall\29, .\31 1u\24\28xsmall\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xsmall\29, .\31 0u\24\28xsmall\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xsmall\29, .\39 u\24\28xsmall\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xsmall\29, .\38 u\24\28xsmall\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xsmall\29, .\37 u\24\28xsmall\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xsmall\29, .\36 u\24\28xsmall\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xsmall\29, .\35 u\24\28xsmall\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xsmall\29, .\34 u\24\28xsmall\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xsmall\29, .\33 u\24\28xsmall\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xsmall\29, .\32 u\24\28xsmall\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xsmall\29, .\31 u\24\28xsmall\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xsmall\29 + *,
		.\31 1u\24\28xsmall\29 + *,
		.\31 0u\24\28xsmall\29 + *,
		.\39 u\24\28xsmall\29 + *,
		.\38 u\24\28xsmall\29 + *,
		.\37 u\24\28xsmall\29 + *,
		.\36 u\24\28xsmall\29 + *,
		.\35 u\24\28xsmall\29 + *,
		.\34 u\24\28xsmall\29 + *,
		.\33 u\24\28xsmall\29 + *,
		.\32 u\24\28xsmall\29 + *,
		.\31 u\24\28xsmall\29 + * {
			clear: left;
		}

		.\-11u\28xsmall\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xsmall\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xsmall\29 {
			margin-left: 75%;
		}

		.\-8u\28xsmall\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xsmall\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xsmall\29 {
			margin-left: 50%;
		}

		.\-5u\28xsmall\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xsmall\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xsmall\29 {
			margin-left: 25%;
		}

		.\-2u\28xsmall\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xsmall\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 360px) {

		.row > * {
			padding: 0 0 0 1.5em;
		}

		.row {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 3em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -3em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 3em 0 0 3em;
		}

		.row.uniform.\32 00\25 {
			margin: -3em 0 -1px -3em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 2.25em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -2.25em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 2.25em 0 0 2.25em;
		}

		.row.uniform.\31 50\25 {
			margin: -2.25em 0 -1px -2.25em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.75em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.75em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.75em 0 0 0.75em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.75em 0 -1px -0.75em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.375em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.375em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.375em 0 0 0.375em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.375em 0 -1px -0.375em;
		}

		.\31 2u\28xxsmall\29, .\31 2u\24\28xxsmall\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xxsmall\29, .\31 1u\24\28xxsmall\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xxsmall\29, .\31 0u\24\28xxsmall\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xxsmall\29, .\39 u\24\28xxsmall\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xxsmall\29, .\38 u\24\28xxsmall\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xxsmall\29, .\37 u\24\28xxsmall\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xxsmall\29, .\36 u\24\28xxsmall\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xxsmall\29, .\35 u\24\28xxsmall\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xxsmall\29, .\34 u\24\28xxsmall\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xxsmall\29, .\33 u\24\28xxsmall\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xxsmall\29, .\32 u\24\28xxsmall\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xxsmall\29, .\31 u\24\28xxsmall\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xxsmall\29 + *,
		.\31 1u\24\28xxsmall\29 + *,
		.\31 0u\24\28xxsmall\29 + *,
		.\39 u\24\28xxsmall\29 + *,
		.\38 u\24\28xxsmall\29 + *,
		.\37 u\24\28xxsmall\29 + *,
		.\36 u\24\28xxsmall\29 + *,
		.\35 u\24\28xxsmall\29 + *,
		.\34 u\24\28xxsmall\29 + *,
		.\33 u\24\28xxsmall\29 + *,
		.\32 u\24\28xxsmall\29 + *,
		.\31 u\24\28xxsmall\29 + * {
			clear: left;
		}

		.\-11u\28xxsmall\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xxsmall\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xxsmall\29 {
			margin-left: 75%;
		}

		.\-8u\28xxsmall\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xxsmall\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xxsmall\29 {
			margin-left: 50%;
		}

		.\-5u\28xxsmall\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xxsmall\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xxsmall\29 {
			margin-left: 25%;
		}

		.\-2u\28xxsmall\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xxsmall\29 {
			margin-left: 8.33333%;
		}

	}

/* Basic */

	@-ms-viewport {
		width: device-width;
	}

	body {
		-ms-overflow-style: scrollbar;
	}

	@media screen and (max-width: 360px) {

		html, body {
			min-width: 320px;
		}

	}

	body {
		background: #ffffff;
	}

		body.is-loading *, body.is-loading *:before, body.is-loading *:after {
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
		}

/* Type */

	body {
		color: #999999;
	}

	html, input, select, textarea {
		font-size: 16pt;
	}

		@media screen and (max-width: 1680px) {

			html, input, select, textarea {
				font-size: 13pt;
			}

		}

		@media screen and (max-width: 1280px) {

			html, input, select, textarea {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 360px) {

			html, input, select, textarea {
				font-size: 11pt;
			}

		}

	body, input, select, textarea {
		font-family: Arial, Helvetica, sans-serif;
		font-weight: normal;
		line-height: 1.5em;
		letter-spacing: -0.015em;
	}

	a {
		-moz-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
		-webkit-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
		-ms-transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
		transition: color 0.2s ease-in-out, border-bottom-color 0.2s ease-in-out;
		text-decoration: none;
		border-bottom: dotted 1px;
	}

		a:hover {
			border-bottom-color: transparent !important;
		}

	strong, b {
		font-weight: bold;
	}

	em, i {
		font-style: italic;
	}

	p {
		margin: 0 0 2em 0;
	}

	h1, h2, h3, h4, h5, h6 {
		font-weight: normal;
		line-height: 1em;
		margin: 0 0 1em 0;
		letter-spacing: -0.0125em;
	}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			color: inherit;
			text-decoration: none;
			border-bottom: none;
		}

		@media screen and (max-width: 980px) {

			h1 br, h2 br, h3 br, h4 br, h5 br, h6 br {
				display: none;
			}

		}

	h2 {
		font-size: 1.75em;
		line-height: 1.5em;
	}

	h3 {
		font-size: 1.5em;
		line-height: 1.5em;
	}

	h4 {
		font-size: 1.1em;
		line-height: 1.5em;
	}

	h5 {
		font-size: 0.9em;
		line-height: 1.5em;
	}

	h6 {
		font-size: 0.7em;
		line-height: 1.5em;
	}

	@media screen and (max-width: 736px) {

		h2 {
			font-size: 1.25em;
		}

		h3 {
			font-size: 1.2em;
		}

		h4 {
			font-size: 1em;
		}

	}

	sub {
		font-size: 0.8em;
		position: relative;
		top: 0.5em;
	}

	sup {
		font-size: 0.8em;
		position: relative;
		top: -0.5em;
	}

	blockquote {
		border-left-style: solid;
		border-left-width: 4px;
		font-style: italic;
		margin: 0 0 2em 0;
		padding: 0.5em 0 0.5em 2em;
	}

	code {
		border-radius: 6px;
		border-style: solid;
		border-width: 1px;
		font-family: \"Courier New\", monospace;
		font-size: 0.9em;
		margin: 0 0.25em;
		padding: 0.25em 0.65em;
	}

	pre {
		-webkit-overflow-scrolling: touch;
		font-family: \"Courier New\", monospace;
		font-size: 0.9em;
		margin: 0 0 2em 0;
	}

		pre code {
			display: block;
			line-height: 1.75em;
			padding: 1em 1.5em;
			overflow-x: auto;
		}

	hr {
		border: 0;
		border-bottom-style: solid;
		border-bottom-width: 1px;
		margin: 2em 0;
	}

		hr.major {
			margin: 3em 0;
		}

	.align-left {
		text-align: left;
	}

	.align-center {
		text-align: center;
	}

	.align-right {
		text-align: right;
	}

	input, select, textarea {
		color: #999999;
	}

	a {
		color: inherit;
		border-bottom-color: #d6d6d6;
	}

		a:hover {
			color: #4696e5;
		}

	strong, b {
		color: #828282;
	}

	h1, h2, h3, h4, h5, h6 {
		color: #828282;
	}

	blockquote {
		border-left-color: #e6e6e6;
	}

	code {
		background: rgba(144, 144, 144, 0.075);
		border-color: #e6e6e6;
	}

	hr {
		border-bottom-color: #e6e6e6;
	}

/* Box */

	.box {
		border-radius: 6px;
		border: solid 1px #e6e6e6;
		margin-bottom: 2em;
		padding: 1.5em;
	}

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
			margin-bottom: 0;
		}

		.box.alt {
			border: 0;
			border-radius: 0;
			padding: 0;
		}

/* Button */

	input[type=\"submit\"],
	input[type=\"reset\"],
	input[type=\"button\"],
	button,
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
		border-radius: 6px;
		border: 0;
		cursor: pointer;
		display: inline-block;
		font-weight: bold;
		height: 2.85em;
		line-height: 2.95em;
		padding: 0 1.75em;
		text-align: center;
		text-decoration: none;
		white-space: nowrap;
	}

		input[type=\"submit\"].icon,
		input[type=\"reset\"].icon,
		input[type=\"button\"].icon,
		button.icon,
		.button.icon {
			padding-left: 1.35em;
		}

			input[type=\"submit\"].icon:before,
			input[type=\"reset\"].icon:before,
			input[type=\"button\"].icon:before,
			button.icon:before,
			.button.icon:before {
				margin-right: 0.5em;
			}

		input[type=\"submit\"].fit,
		input[type=\"reset\"].fit,
		input[type=\"button\"].fit,
		button.fit,
		.button.fit {
			display: block;
			margin: 0 0 1em 0;
			width: 100%;
		}

		input[type=\"submit\"].small,
		input[type=\"reset\"].small,
		input[type=\"button\"].small,
		button.small,
		.button.small {
			font-size: 0.8em;
		}

		input[type=\"submit\"].big,
		input[type=\"reset\"].big,
		input[type=\"button\"].big,
		button.big,
		.button.big {
			font-size: 1.35em;
		}

		input[type=\"submit\"].disabled, input[type=\"submit\"]:disabled,
		input[type=\"reset\"].disabled,
		input[type=\"reset\"]:disabled,
		input[type=\"button\"].disabled,
		input[type=\"button\"]:disabled,
		button.disabled,
		button:disabled,
		.button.disabled,
		.button:disabled {
			-moz-pointer-events: none;
			-webkit-pointer-events: none;
			-ms-pointer-events: none;
			pointer-events: none;
			cursor: default;
			opacity: 0.25;
		}

	@media screen and (max-width: 480px) and (orientation: portrait) {

		input[type=\"submit\"],
		input[type=\"reset\"],
		input[type=\"button\"],
		button,
		.button {
			padding: 0;
		}

	}

	input[type=\"submit\"],
	input[type=\"reset\"],
	input[type=\"button\"],
	button,
	.button {
		background-color: transparent;
		color: #828282 !important;
		box-shadow: inset 0 0 0 2px #e6e6e6;
	}

		input[type=\"submit\"]:hover,
		input[type=\"reset\"]:hover,
		input[type=\"button\"]:hover,
		button:hover,
		.button:hover {
			background-color: rgba(144, 144, 144, 0.075);
		}

		input[type=\"submit\"]:active,
		input[type=\"reset\"]:active,
		input[type=\"button\"]:active,
		button:active,
		.button:active {
			background-color: rgba(144, 144, 144, 0.15);
		}

		input[type=\"submit\"].special,
		input[type=\"reset\"].special,
		input[type=\"button\"].special,
		button.special,
		.button.special {
			box-shadow: none;
			background-color: #4696e5;
			color: #ffffff !important;
		}

			input[type=\"submit\"].special:hover,
			input[type=\"reset\"].special:hover,
			input[type=\"button\"].special:hover,
			button.special:hover,
			.button.special:hover {
				background-color: #5ca3e8;
			}

			input[type=\"submit\"].special:active,
			input[type=\"reset\"].special:active,
			input[type=\"button\"].special:active,
			button.special:active,
			.button.special:active {
				background-color: #3089e2;
			}

/* Form */

	form {
		margin: 0 0 2em 0;
	}

	label {
		display: block;
		font-size: 0.9em;
		font-weight: bold;
		margin: 0 0 1em 0;
	}

	input[type=\"text\"],
	input[type=\"password\"],
	input[type=\"email\"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		border-radius: 6px;
		border: none;
		border-style: solid;
		border-width: 1px;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1em;
		text-decoration: none;
		width: 100%;
	}

		input[type=\"text\"]:invalid,
		input[type=\"password\"]:invalid,
		input[type=\"email\"]:invalid,
		select:invalid,
		textarea:invalid {
			box-shadow: none;
		}

	.select-wrapper {
		text-decoration: none;
		display: block;
		position: relative;
	}

		.select-wrapper:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.select-wrapper:before {
			content: '\f078';
			display: block;
			height: 2.75em;
			line-height: 2.75em;
			pointer-events: none;
			position: absolute;
			right: 0;
			text-align: center;
			top: 0;
			width: 2.75em;
		}

		.select-wrapper select::-ms-expand {
			display: none;
		}

	input[type=\"text\"],
	input[type=\"password\"],
	input[type=\"email\"],
	select {
		height: 2.75em;
	}

	textarea {
		padding: 0.75em 1em;
	}

	input[type=\"checkbox\"],
	input[type=\"radio\"] {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		display: block;
		float: left;
		margin-right: -2em;
		opacity: 0;
		width: 1em;
		z-index: -1;
	}

		input[type=\"checkbox\"] + label,
		input[type=\"radio\"] + label {
			text-decoration: none;
			cursor: pointer;
			display: inline-block;
			font-size: 1em;
			font-weight: normal;
			padding-left: 2.4em;
			padding-right: 0.75em;
			position: relative;
		}

			input[type=\"checkbox\"] + label:before,
			input[type=\"radio\"] + label:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			input[type=\"checkbox\"] + label:before,
			input[type=\"radio\"] + label:before {
				border-radius: 6px;
				border-style: solid;
				border-width: 1px;
				content: '';
				display: inline-block;
				height: 1.65em;
				left: 0;
				line-height: 1.58125em;
				position: absolute;
				text-align: center;
				top: 0;
				width: 1.65em;
			}

		input[type=\"checkbox\"]:checked + label:before,
		input[type=\"radio\"]:checked + label:before {
			content: '\f00c';
		}

	input[type=\"checkbox\"] + label:before {
		border-radius: 6px;
	}

	input[type=\"radio\"] + label:before {
		border-radius: 100%;
	}

	::-webkit-input-placeholder {
		opacity: 1.0;
	}

	:-moz-placeholder {
		opacity: 1.0;
	}

	::-moz-placeholder {
		opacity: 1.0;
	}

	:-ms-input-placeholder {
		opacity: 1.0;
	}

	.formerize-placeholder {
		opacity: 1.0;
	}

	label {
		color: #828282;
	}

	input[type=\"text\"],
	input[type=\"password\"],
	input[type=\"email\"],
	select,
	textarea {
		color: inherit;
		background-color: rgba(144, 144, 144, 0.075);
		border-color: #e6e6e6;
	}

		input[type=\"text\"]:focus,
		input[type=\"password\"]:focus,
		input[type=\"email\"]:focus,
		select:focus,
		textarea:focus {
			border-color: #4696e5;
			box-shadow: 0 0 0 1px #4696e5;
		}

	.select-wrapper:before {
		color: #e6e6e6;
	}

	input[type=\"checkbox\"] + label,
	input[type=\"radio\"] + label {
		color: #999999;
	}

		input[type=\"checkbox\"] + label:before,
		input[type=\"radio\"] + label:before {
			background-color: rgba(144, 144, 144, 0.075);
			border-color: #e6e6e6;
		}

	input[type=\"checkbox\"]:checked + label:before,
	input[type=\"radio\"]:checked + label:before {
		background-color: #4696e5;
		border-color: #4696e5;
		color: #ffffff;
	}

	input[type=\"checkbox\"]:focus + label:before,
	input[type=\"radio\"]:focus + label:before {
		border-color: #4696e5;
		box-shadow: 0 0 0 1px #4696e5;
	}

	::-webkit-input-placeholder {
		color: #e0e0e0 !important;
	}

	:-moz-placeholder {
		color: #e0e0e0 !important;
	}

	::-moz-placeholder {
		color: #e0e0e0 !important;
	}

	:-ms-input-placeholder {
		color: #e0e0e0 !important;
	}

	.formerize-placeholder {
		color: #e0e0e0 !important;
	}

/* Icon */

	.icon {
		text-decoration: none;
		border-bottom: none;
		position: relative;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.icon > .label {
			display: none;
		}

	.icon {
		color: #e0e0e0;
	}

/* Image */

	.image {
		border-radius: 6px;
		border: 0;
		display: inline-block;
		position: relative;
		overflow: hidden;
	}

		.image img {
			border-radius: 6px;
			display: block;
		}

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
				width: 100%;
			}

		.image.left {
			float: left;
			margin: 0 1.5em 1em 0;
			top: 0.25em;
		}

		.image.right {
			float: right;
			margin: 0 0 1em 1.5em;
			top: 0.25em;
		}

		.image.fit {
			display: block;
			margin: 0 0 2em 0;
			width: 100%;
		}

			.image.fit img {
				width: 100%;
			}

		.image.main {
			display: block;
			margin: 0 0 3em 0;
			width: 100%;
		}

			.image.main img {
				width: 100%;
			}

		.image.phone {
			box-shadow: none;
			border-radius: 0;
			margin: 0 0 3em 0;
			width: 13em;
		}

			.image.phone img {
				border-radius: 0;
				display: block;
				position: relative;
				width: 100%;
			}

			.image.phone .inner, .image.phone:before, .image.phone:after {
				display: block;
				border: solid 2px rgba(255, 255, 255, 0.25);
			}

			.image.phone .inner {
				position: relative;
			}

				.image.phone .inner:before, .image.phone .inner:after {
					content: '';
					position: absolute;
					left: 50%;
				}

				.image.phone .inner:before {
					top: -1.375em;
					margin-left: -1em;
					width: 2em;
					height: 0.25em;
					border-radius: 0.5em;
					background: rgba(255, 255, 255, 0.25);
				}

				.image.phone .inner:after {
					bottom: -2.75em;
					margin-left: -1em;
					width: 2em;
					height: 2em;
					border-radius: 100%;
					border: solid 2px rgba(255, 255, 255, 0.25);
				}

			.image.phone:before, .image.phone:after {
				content: '';
			}

			.image.phone:before {
				height: 2.5em;
				border-radius: 1em 1em 0 0;
				border-bottom: 0;
			}

			.image.phone:after {
				height: 3.5em;
				border-radius: 0 0 1em 1em;
				border-top: 0;
			}

	.image {
		box-shadow: 0 0 0 4px #ffffff, 0 0 0 5px #e6e6e6;
	}

		.image.phone {
			box-shadow: none;
		}

			.image.phone .inner, .image.phone:before, .image.phone:after {
				border-color: #e6e6e6;
			}

			.image.phone .inner:before {
				background: #e6e6e6;
			}

			.image.phone .inner:after {
				border-color: #e6e6e6;
			}

/* List */

	ol {
		list-style: decimal;
		margin: 0 0 2em 0;
		padding-left: 1.25em;
	}

		ol li {
			padding-left: 0.25em;
		}

	ul {
		list-style: disc;
		margin: 0 0 2em 0;
		padding-left: 1em;
	}

		ul li {
			padding-left: 0.5em;
		}

		ul.alt {
			list-style: none;
			padding-left: 0;
		}

			ul.alt li {
				border-top-style: solid;
				border-top-width: 1px;
				padding: 0.5em 0;
			}

				ul.alt li:first-child {
					border-top: 0;
					padding-top: 0;
				}

		ul.icons {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ul.icons li {
				display: inline-block;
				padding: 0 1.5em 0 0;
			}

				ul.icons li:last-child {
					padding-right: 0 !important;
				}

				ul.icons li .icon:before {
					font-size: 1.75rem;
				}

			ul.icons.major li {
				padding: 0 2.5em 0 0;
			}

				ul.icons.major li .icon:before {
					font-size: 2.75rem;
				}

			@media screen and (max-width: 736px) {

				ul.icons.major li {
					padding: 0 1.25em 0 0;
				}

					ul.icons.major li .icon:before {
						font-size: 1.75rem;
					}

			}

			ul.icons.labeled li {
				margin: 1em 0;
				padding: 0 2em 0 0;
			}

				ul.icons.labeled li .icon:before {
					vertical-align: middle;
					font-size: 2.25rem;
					margin-right: 0.5em;
				}

				ul.icons.labeled li .icon .label {
					display: inline-block;
					vertical-align: middle;
					color: #999999;
				}

	@media screen and (max-width: 736px) and (orientation: portrait) {

		ul.icons.labeled {
			text-align: left;
			margin-right: auto;
			margin-left: auto;
			display: inline-block;
			white-space: nowrap;
		}

			ul.icons.labeled li {
				display: block;
				padding: 0;
				margin: 1.5em 0 0 0;
			}

				ul.icons.labeled li .icon:before {
					width: 1.5em;
					display: block;
					float: left;
					margin-right: 0;
				}

				ul.icons.labeled li .icon:after {
					content: '';
					display: block;
					clear: both;
				}

				ul.icons.labeled li:first-child {
					margin-top: 0;
				}

	}

		ul.actions {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ul.actions li {
				display: inline-block;
				padding: 0 1em 0 0;
				vertical-align: middle;
			}

				ul.actions li:last-child {
					padding-right: 0;
				}

			ul.actions.small li {
				padding: 0 0.5em 0 0;
			}

			ul.actions.vertical li {
				display: block;
				padding: 1em 0 0 0;
			}

				ul.actions.vertical li:first-child {
					padding-top: 0;
				}

				ul.actions.vertical li > * {
					margin-bottom: 0;
				}

			ul.actions.vertical.small li {
				padding: 0.5em 0 0 0;
			}

				ul.actions.vertical.small li:first-child {
					padding-top: 0;
				}

			ul.actions.fit {
				display: table;
				margin-left: -1em;
				padding: 0;
				table-layout: fixed;
				width: calc(100% + 1em);
			}

				ul.actions.fit li {
					display: table-cell;
					padding: 0 0 0 1em;
				}

					ul.actions.fit li > * {
						margin-bottom: 0;
					}

				ul.actions.fit.small {
					margin-left: -0.5em;
					width: calc(100% + 0.5em);
				}

					ul.actions.fit.small li {
						padding: 0 0 0 0.5em;
					}

	@media screen and (max-width: 480px) and (orientation: portrait) {

		ul.actions {
			margin: 0 0 2em 0;
		}

			ul.actions li {
				padding: 1em 0 0 0;
				display: block;
				text-align: center;
				width: 100%;
			}

				ul.actions li:first-child {
					padding-top: 0;
				}

				ul.actions li > * {
					width: 100%;
					margin: 0 !important;
				}

					ul.actions li > *.icon:before {
						margin-left: -2em;
					}

			ul.actions.small li {
				padding: 0.5em 0 0 0;
			}

				ul.actions.small li:first-child {
					padding-top: 0;
				}

	}

	dl {
		margin: 0 0 2em 0;
	}

		dl dt {
			display: block;
			font-weight: bold;
			margin: 0 0 1em 0;
		}

		dl dd {
			margin-left: 2em;
		}

	ul.alt > li {
		border-top-color: #e6e6e6;
	}

/* Section/Article */

	section.special, article.special {
		text-align: center;
	}

	header p {
		position: relative;
		margin: 0 0 1.5em 0;
	}

		@media screen and (max-width: 736px) {

			header p br {
				display: none;
			}

		}

	header h2 + p {
		font-size: 1.25em;
		margin-top: -0.5em;
		line-height: 1.5em;
	}

	header h3 + p {
		font-size: 1.1em;
		margin-top: -0.25em;
		line-height: 1.5em;
	}

	header h4 + p,
	header h5 + p,
	header h6 + p {
		font-size: 0.9em;
		margin-top: -0.6em;
		line-height: 1.5em;
	}

	header.major {
		margin: 0 0 2.5em 0;
		text-align: center;
	}

		header.major:after {
			content: '';
			border-bottom: solid 2px #e6e6e6;
			display: block;
			width: 4em;
			margin: 2em auto 0 auto;
		}

		@media screen and (max-width: 736px) {

			header.major {
				margin: 0 0 2em 0;
			}

				header.major p {
					font-size: 1em;
				}

		}

/* Spotlight */

	.spotlight {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-align-items: center;
		-webkit-align-items: center;
		-ms-align-items: center;
		align-items: center;
		margin: 0 0 2em 0;
	}

		.spotlight .image {
			width: 30%;
			border-radius: 100%;
			margin: 0 3em 0 0;
			display: block;
		}

			.spotlight .image img {
				display: block;
				border-radius: 100%;
				width: 100%;
			}

		.spotlight .content {
			width: 70%;
		}

			.spotlight .content > :last-child {
				margin-bottom: 0;
			}

		.spotlight:nth-child(2n) {
			-moz-flex-direction: row-reverse;
			-webkit-flex-direction: row-reverse;
			-ms-flex-direction: row-reverse;
			flex-direction: row-reverse;
		}

			.spotlight:nth-child(2n) .image {
				margin: 0 0 0 3em;
			}

			.spotlight:nth-child(2n) .content {
				text-align: right;
			}

	@media screen and (max-width: 736px) and (orientation: landscape) {

		.spotlight .image {
			margin: 0 2em 0 0;
		}

		.spotlight:nth-child(2n) .image {
			margin: 0 0 0 2em;
		}

	}

	@media screen and (max-width: 736px) and (orientation: portrait) {

		.spotlight {
			-moz-flex-direction: column !important;
			-webkit-flex-direction: column !important;
			-ms-flex-direction: column !important;
			flex-direction: column !important;
		}

			.spotlight .image {
				width: 100%;
				max-width: 60%;
				margin: 0 0 2em 0 !important;
			}

			.spotlight .content {
				width: 100%;
				text-align: center !important;
			}

	}

/* Table */

	.table-wrapper {
		-webkit-overflow-scrolling: touch;
		overflow-x: auto;
	}

	table {
		margin: 0 0 2em 0;
		width: 100%;
	}

		table tbody tr {
			border-style: solid;
			border-width: 1px;
			border-left: 0;
			border-right: 0;
		}

		table td {
			padding: 0.75em 0.75em;
		}

		table th {
			font-size: 0.9em;
			font-weight: bold;
			padding: 0 0.75em 0.75em 0.75em;
			text-align: left;
		}

		table thead {
			border-bottom-style: solid;
			border-bottom-width: 2px;
		}

		table tfoot {
			border-top-style: solid;
			border-top-width: 2px;
		}

		table.alt {
			border-collapse: separate;
		}

			table.alt tbody tr td {
				border-style: solid;
				border-width: 1px;
				border-left-width: 0;
				border-top-width: 0;
			}

				table.alt tbody tr td:first-child {
					border-left-width: 1px;
				}

			table.alt tbody tr:first-child td {
				border-top-width: 1px;
			}

			table.alt thead {
				border-bottom: 0;
			}

			table.alt tfoot {
				border-top: 0;
			}

	table tbody tr {
		border-color: #e6e6e6;
	}

		table tbody tr:nth-child(2n + 1) {
			background-color: rgba(144, 144, 144, 0.075);
		}

	table th {
		color: #828282;
	}

	table thead {
		border-bottom-color: #e6e6e6;
	}

	table tfoot {
		border-top-color: #e6e6e6;
	}

	table.alt tbody tr td {
		border-color: #e6e6e6;
	}

/* Wrapper */

	.wrapper {
		padding: 4.5em 0 2.5em 0 ;
		background-color: #ffffff;
		border-bottom: solid 2px #eeeeee;
	}

		.wrapper > .inner {
			margin-left: auto;
			margin-right: auto;
			width: 50em;
		}

			.wrapper > .inner.alt > * {
				border-top: solid 2px #eeeeee;
				margin-bottom: 0;
				margin-top: 3em;
				padding-top: 3em;
			}

				.wrapper > .inner.alt > *:first-child {
					border-top: 0;
					margin-top: 0;
					padding-top: 0;
				}

		.wrapper.style1 {
			background-color: #4696e5;
			color: #d0e4f8;
		}

			.wrapper.style1 input[type=\"submit\"],
			.wrapper.style1 input[type=\"reset\"],
			.wrapper.style1 input[type=\"button\"],
			.wrapper.style1 button,
			.wrapper.style1 .button {
				background-color: transparent;
				color: #ffffff !important;
				box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.25);
			}

				.wrapper.style1 input[type=\"submit\"]:hover,
				.wrapper.style1 input[type=\"reset\"]:hover,
				.wrapper.style1 input[type=\"button\"]:hover,
				.wrapper.style1 button:hover,
				.wrapper.style1 .button:hover {
					background-color: rgba(255, 255, 255, 0.075);
				}

				.wrapper.style1 input[type=\"submit\"]:active,
				.wrapper.style1 input[type=\"reset\"]:active,
				.wrapper.style1 input[type=\"button\"]:active,
				.wrapper.style1 button:active,
				.wrapper.style1 .button:active {
					background-color: rgba(255, 255, 255, 0.2);
				}

				.wrapper.style1 input[type=\"submit\"].special,
				.wrapper.style1 input[type=\"reset\"].special,
				.wrapper.style1 input[type=\"button\"].special,
				.wrapper.style1 button.special,
				.wrapper.style1 .button.special {
					box-shadow: none;
					background-color: #ffffff;
					color: #4696e5 !important;
				}

			.wrapper.style1 label {
				color: #ffffff;
			}

			.wrapper.style1 input[type=\"text\"],
			.wrapper.style1 input[type=\"password\"],
			.wrapper.style1 input[type=\"email\"],
			.wrapper.style1 select,
			.wrapper.style1 textarea {
				color: inherit;
				background-color: rgba(255, 255, 255, 0.075);
				border-color: rgba(255, 255, 255, 0.25);
			}

				.wrapper.style1 input[type=\"text\"]:focus,
				.wrapper.style1 input[type=\"password\"]:focus,
				.wrapper.style1 input[type=\"email\"]:focus,
				.wrapper.style1 select:focus,
				.wrapper.style1 textarea:focus {
					border-color: #ffffff;
					box-shadow: 0 0 0 1px #ffffff;
				}

			.wrapper.style1 .select-wrapper:before {
				color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 input[type=\"checkbox\"] + label,
			.wrapper.style1 input[type=\"radio\"] + label {
				color: #d0e4f8;
			}

				.wrapper.style1 input[type=\"checkbox\"] + label:before,
				.wrapper.style1 input[type=\"radio\"] + label:before {
					background-color: rgba(255, 255, 255, 0.075);
					border-color: rgba(255, 255, 255, 0.25);
				}

			.wrapper.style1 input[type=\"checkbox\"]:checked + label:before,
			.wrapper.style1 input[type=\"radio\"]:checked + label:before {
				background-color: #ffffff;
				border-color: #ffffff;
				color: #4696e5;
			}

			.wrapper.style1 input[type=\"checkbox\"]:focus + label:before,
			.wrapper.style1 input[type=\"radio\"]:focus + label:before {
				border-color: #ffffff;
				box-shadow: 0 0 0 1px #ffffff;
			}

			.wrapper.style1 ::-webkit-input-placeholder {
				color: #b5d5f4 !important;
			}

			.wrapper.style1 :-moz-placeholder {
				color: #b5d5f4 !important;
			}

			.wrapper.style1 ::-moz-placeholder {
				color: #b5d5f4 !important;
			}

			.wrapper.style1 :-ms-input-placeholder {
				color: #b5d5f4 !important;
			}

			.wrapper.style1 .formerize-placeholder {
				color: #b5d5f4 !important;
			}

			.wrapper.style1 .icon {
				color: #b5d5f4;
			}

			.wrapper.style1 .image {
				box-shadow: 0 0 0 4px #4696e5, 0 0 0 5px rgba(255, 255, 255, 0.25);
			}

				.wrapper.style1 .image.phone {
					box-shadow: none;
				}

					.wrapper.style1 .image.phone .inner, .wrapper.style1 .image.phone:before, .wrapper.style1 .image.phone:after {
						border-color: rgba(255, 255, 255, 0.25);
					}

					.wrapper.style1 .image.phone .inner:before {
						background: rgba(255, 255, 255, 0.25);
					}

					.wrapper.style1 .image.phone .inner:after {
						border-color: rgba(255, 255, 255, 0.25);
					}

			.wrapper.style1 ul.alt > li {
				border-top-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 table tbody tr {
				border-color: rgba(255, 255, 255, 0.25);
			}

				.wrapper.style1 table tbody tr:nth-child(2n + 1) {
					background-color: rgba(255, 255, 255, 0.075);
				}

			.wrapper.style1 table th {
				color: #ffffff;
			}

			.wrapper.style1 table thead {
				border-bottom-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 table tfoot {
				border-top-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 table.alt tbody tr td {
				border-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 input, .wrapper.style1 select, .wrapper.style1 textarea {
				color: #d0e4f8;
			}

			.wrapper.style1 a {
				color: inherit;
				border-bottom-color: rgba(255, 255, 255, 0.5);
				color: #ffffff;
			}

			.wrapper.style1 strong, .wrapper.style1 b {
				color: #ffffff;
			}

			.wrapper.style1 h1, .wrapper.style1 h2, .wrapper.style1 h3, .wrapper.style1 h4, .wrapper.style1 h5, .wrapper.style1 h6 {
				color: #ffffff;
			}

			.wrapper.style1 blockquote {
				border-left-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 code {
				background: rgba(255, 255, 255, 0.075);
				border-color: rgba(255, 255, 255, 0.25);
			}

			.wrapper.style1 hr {
				border-bottom-color: rgba(255, 255, 255, 0.25);
			}

		.wrapper.style2 {
			background-color: #fbfbfb;
			color: #999999;
		}

			.wrapper.style2 input[type=\"submit\"],
			.wrapper.style2 input[type=\"reset\"],
			.wrapper.style2 input[type=\"button\"],
			.wrapper.style2 button,
			.wrapper.style2 .button {
				background-color: transparent;
				color: #828282 !important;
				box-shadow: inset 0 0 0 2px #e6e6e6;
			}

				.wrapper.style2 input[type=\"submit\"]:hover,
				.wrapper.style2 input[type=\"reset\"]:hover,
				.wrapper.style2 input[type=\"button\"]:hover,
				.wrapper.style2 button:hover,
				.wrapper.style2 .button:hover {
					background-color: rgba(144, 144, 144, 0.075);
				}

				.wrapper.style2 input[type=\"submit\"]:active,
				.wrapper.style2 input[type=\"reset\"]:active,
				.wrapper.style2 input[type=\"button\"]:active,
				.wrapper.style2 button:active,
				.wrapper.style2 .button:active {
					background-color: rgba(144, 144, 144, 0.15);
				}

				.wrapper.style2 input[type=\"submit\"].special,
				.wrapper.style2 input[type=\"reset\"].special,
				.wrapper.style2 input[type=\"button\"].special,
				.wrapper.style2 button.special,
				.wrapper.style2 .button.special {
					box-shadow: none;
					background-color: #4696e5;
					color: #ffffff !important;
				}

					.wrapper.style2 input[type=\"submit\"].special:hover,
					.wrapper.style2 input[type=\"reset\"].special:hover,
					.wrapper.style2 input[type=\"button\"].special:hover,
					.wrapper.style2 button.special:hover,
					.wrapper.style2 .button.special:hover {
						background-color: #5ca3e8;
					}

					.wrapper.style2 input[type=\"submit\"].special:active,
					.wrapper.style2 input[type=\"reset\"].special:active,
					.wrapper.style2 input[type=\"button\"].special:active,
					.wrapper.style2 button.special:active,
					.wrapper.style2 .button.special:active {
						background-color: #3089e2;
					}

			.wrapper.style2 label {
				color: #828282;
			}

			.wrapper.style2 input[type=\"text\"],
			.wrapper.style2 input[type=\"password\"],
			.wrapper.style2 input[type=\"email\"],
			.wrapper.style2 select,
			.wrapper.style2 textarea {
				color: inherit;
				background-color: rgba(144, 144, 144, 0.075);
				border-color: #e6e6e6;
			}

				.wrapper.style2 input[type=\"text\"]:focus,
				.wrapper.style2 input[type=\"password\"]:focus,
				.wrapper.style2 input[type=\"email\"]:focus,
				.wrapper.style2 select:focus,
				.wrapper.style2 textarea:focus {
					border-color: #4696e5;
					box-shadow: 0 0 0 1px #4696e5;
				}

			.wrapper.style2 .select-wrapper:before {
				color: #e6e6e6;
			}

			.wrapper.style2 input[type=\"checkbox\"] + label,
			.wrapper.style2 input[type=\"radio\"] + label {
				color: #999999;
			}

				.wrapper.style2 input[type=\"checkbox\"] + label:before,
				.wrapper.style2 input[type=\"radio\"] + label:before {
					background-color: rgba(144, 144, 144, 0.075);
					border-color: #e6e6e6;
				}

			.wrapper.style2 input[type=\"checkbox\"]:checked + label:before,
			.wrapper.style2 input[type=\"radio\"]:checked + label:before {
				background-color: #4696e5;
				border-color: #4696e5;
				color: #ffffff;
			}

			.wrapper.style2 input[type=\"checkbox\"]:focus + label:before,
			.wrapper.style2 input[type=\"radio\"]:focus + label:before {
				border-color: #4696e5;
				box-shadow: 0 0 0 1px #4696e5;
			}

			.wrapper.style2 ::-webkit-input-placeholder {
				color: #e0e0e0 !important;
			}

			.wrapper.style2 :-moz-placeholder {
				color: #e0e0e0 !important;
			}

			.wrapper.style2 ::-moz-placeholder {
				color: #e0e0e0 !important;
			}

			.wrapper.style2 :-ms-input-placeholder {
				color: #e0e0e0 !important;
			}

			.wrapper.style2 .formerize-placeholder {
				color: #e0e0e0 !important;
			}

			.wrapper.style2 .icon {
				color: #e0e0e0;
			}

			.wrapper.style2 .image {
				box-shadow: 0 0 0 4px #fbfbfb, 0 0 0 5px #e6e6e6;
			}

				.wrapper.style2 .image.phone {
					box-shadow: none;
				}

					.wrapper.style2 .image.phone .inner, .wrapper.style2 .image.phone:before, .wrapper.style2 .image.phone:after {
						border-color: #e6e6e6;
					}

					.wrapper.style2 .image.phone .inner:before {
						background: #e6e6e6;
					}

					.wrapper.style2 .image.phone .inner:after {
						border-color: #e6e6e6;
					}

			.wrapper.style2 ul.alt > li {
				border-top-color: #e6e6e6;
			}

			.wrapper.style2 table tbody tr {
				border-color: #e6e6e6;
			}

				.wrapper.style2 table tbody tr:nth-child(2n + 1) {
					background-color: rgba(144, 144, 144, 0.075);
				}

			.wrapper.style2 table th {
				color: #828282;
			}

			.wrapper.style2 table thead {
				border-bottom-color: #e6e6e6;
			}

			.wrapper.style2 table tfoot {
				border-top-color: #e6e6e6;
			}

			.wrapper.style2 table.alt tbody tr td {
				border-color: #e6e6e6;
			}

			.wrapper.style2 input, .wrapper.style2 select, .wrapper.style2 textarea {
				color: #999999;
			}

			.wrapper.style2 a {
				color: inherit;
				border-bottom-color: #d6d6d6;
			}

				.wrapper.style2 a:hover {
					color: #4696e5;
				}

			.wrapper.style2 strong, .wrapper.style2 b {
				color: #828282;
			}

			.wrapper.style2 h1, .wrapper.style2 h2, .wrapper.style2 h3, .wrapper.style2 h4, .wrapper.style2 h5, .wrapper.style2 h6 {
				color: #828282;
			}

			.wrapper.style2 blockquote {
				border-left-color: #e6e6e6;
			}

			.wrapper.style2 code {
				background: rgba(144, 144, 144, 0.075);
				border-color: #e6e6e6;
			}

			.wrapper.style2 hr {
				border-bottom-color: #e6e6e6;
			}

		.wrapper.style3 {
			background-color: #f7f7f7;
			color: #999999;
		}

			.wrapper.style3 input[type=\"submit\"],
			.wrapper.style3 input[type=\"reset\"],
			.wrapper.style3 input[type=\"button\"],
			.wrapper.style3 button,
			.wrapper.style3 .button {
				background-color: transparent;
				color: #828282 !important;
				box-shadow: inset 0 0 0 2px #d6d6d6;
			}

				.wrapper.style3 input[type=\"submit\"]:hover,
				.wrapper.style3 input[type=\"reset\"]:hover,
				.wrapper.style3 input[type=\"button\"]:hover,
				.wrapper.style3 button:hover,
				.wrapper.style3 .button:hover {
					background-color: rgba(144, 144, 144, 0.075);
				}

				.wrapper.style3 input[type=\"submit\"]:active,
				.wrapper.style3 input[type=\"reset\"]:active,
				.wrapper.style3 input[type=\"button\"]:active,
				.wrapper.style3 button:active,
				.wrapper.style3 .button:active {
					background-color: rgba(144, 144, 144, 0.15);
				}

				.wrapper.style3 input[type=\"submit\"].special,
				.wrapper.style3 input[type=\"reset\"].special,
				.wrapper.style3 input[type=\"button\"].special,
				.wrapper.style3 button.special,
				.wrapper.style3 .button.special {
					box-shadow: none;
					background-color: #4696e5;
					color: #ffffff !important;
				}

					.wrapper.style3 input[type=\"submit\"].special:hover,
					.wrapper.style3 input[type=\"reset\"].special:hover,
					.wrapper.style3 input[type=\"button\"].special:hover,
					.wrapper.style3 button.special:hover,
					.wrapper.style3 .button.special:hover {
						background-color: #5ca3e8;
					}

					.wrapper.style3 input[type=\"submit\"].special:active,
					.wrapper.style3 input[type=\"reset\"].special:active,
					.wrapper.style3 input[type=\"button\"].special:active,
					.wrapper.style3 button.special:active,
					.wrapper.style3 .button.special:active {
						background-color: #3089e2;
					}

			.wrapper.style3 label {
				color: #828282;
			}

			.wrapper.style3 input[type=\"text\"],
			.wrapper.style3 input[type=\"password\"],
			.wrapper.style3 input[type=\"email\"],
			.wrapper.style3 select,
			.wrapper.style3 textarea {
				color: inherit;
				background-color: rgba(144, 144, 144, 0.075);
				border-color: #d6d6d6;
			}

				.wrapper.style3 input[type=\"text\"]:focus,
				.wrapper.style3 input[type=\"password\"]:focus,
				.wrapper.style3 input[type=\"email\"]:focus,
				.wrapper.style3 select:focus,
				.wrapper.style3 textarea:focus {
					border-color: #4696e5;
					box-shadow: 0 0 0 1px #4696e5;
				}

			.wrapper.style3 .select-wrapper:before {
				color: #d6d6d6;
			}

			.wrapper.style3 input[type=\"checkbox\"] + label,
			.wrapper.style3 input[type=\"radio\"] + label {
				color: #999999;
			}

				.wrapper.style3 input[type=\"checkbox\"] + label:before,
				.wrapper.style3 input[type=\"radio\"] + label:before {
					background-color: rgba(144, 144, 144, 0.075);
					border-color: #d6d6d6;
				}

			.wrapper.style3 input[type=\"checkbox\"]:checked + label:before,
			.wrapper.style3 input[type=\"radio\"]:checked + label:before {
				background-color: #4696e5;
				border-color: #4696e5;
				color: #ffffff;
			}

			.wrapper.style3 input[type=\"checkbox\"]:focus + label:before,
			.wrapper.style3 input[type=\"radio\"]:focus + label:before {
				border-color: #4696e5;
				box-shadow: 0 0 0 1px #4696e5;
			}

			.wrapper.style3 ::-webkit-input-placeholder {
				color: #b0b0b0 !important;
			}

			.wrapper.style3 :-moz-placeholder {
				color: #b0b0b0 !important;
			}

			.wrapper.style3 ::-moz-placeholder {
				color: #b0b0b0 !important;
			}

			.wrapper.style3 :-ms-input-placeholder {
				color: #b0b0b0 !important;
			}

			.wrapper.style3 .formerize-placeholder {
				color: #b0b0b0 !important;
			}

			.wrapper.style3 .icon {
				color: #b0b0b0;
			}

			.wrapper.style3 .image {
				box-shadow: 0 0 0 4px #f7f7f7, 0 0 0 5px #d6d6d6;
			}

				.wrapper.style3 .image.phone {
					box-shadow: none;
				}

					.wrapper.style3 .image.phone .inner, .wrapper.style3 .image.phone:before, .wrapper.style3 .image.phone:after {
						border-color: #d6d6d6;
					}

					.wrapper.style3 .image.phone .inner:before {
						background: #d6d6d6;
					}

					.wrapper.style3 .image.phone .inner:after {
						border-color: #d6d6d6;
					}

			.wrapper.style3 ul.alt > li {
				border-top-color: #d6d6d6;
			}

			.wrapper.style3 table tbody tr {
				border-color: #d6d6d6;
			}

				.wrapper.style3 table tbody tr:nth-child(2n + 1) {
					background-color: rgba(144, 144, 144, 0.075);
				}

			.wrapper.style3 table th {
				color: #828282;
			}

			.wrapper.style3 table thead {
				border-bottom-color: #d6d6d6;
			}

			.wrapper.style3 table tfoot {
				border-top-color: #d6d6d6;
			}

			.wrapper.style3 table.alt tbody tr td {
				border-color: #d6d6d6;
			}

			.wrapper.style3 input, .wrapper.style3 select, .wrapper.style3 textarea {
				color: #999999;
			}

			.wrapper.style3 a {
				color: inherit;
				border-bottom-color: #c6c6c6;
			}

				.wrapper.style3 a:hover {
					color: #4696e5;
				}

			.wrapper.style3 strong, .wrapper.style3 b {
				color: #828282;
			}

			.wrapper.style3 h1, .wrapper.style3 h2, .wrapper.style3 h3, .wrapper.style3 h4, .wrapper.style3 h5, .wrapper.style3 h6 {
				color: #828282;
			}

			.wrapper.style3 blockquote {
				border-left-color: #d6d6d6;
			}

			.wrapper.style3 code {
				background: rgba(144, 144, 144, 0.075);
				border-color: #d6d6d6;
			}

			.wrapper.style3 hr {
				border-bottom-color: #d6d6d6;
			}

		@media screen and (max-width: 980px) {

			.wrapper {
				padding: 4em 4em 2em 4em ;
			}

				.wrapper > .inner {
					width: 100%;
				}

		}

	@media screen and (max-width: 736px) and (orientation: landscape) {

		.wrapper {
			padding: 3em 3em 1em 3em ;
		}

	}

	@media screen and (max-width: 736px) and (orientation: portrait) {

		.wrapper {
			padding: 3em 1.5em 1em 1.5em ;
		}

	}

	@media screen and (max-width: 480px) and (orientation: landscape) {

		.wrapper {
			padding: 2em 1.5em 0.1em 1.5em ;
		}

	}

	@media screen and (max-width: 480px) and (orientation: portrait) {

		.wrapper {
			padding: 2em 1em 0.1em 1em ;
		}

	}

/* Header */

	#header {
		background-color: #4696e5;
		color: #d0e4f8;
		padding: 4.5em 0 2.5em 0 ;
		-moz-align-items: center;
		-webkit-align-items: center;
		-ms-align-items: center;
		align-items: center;
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-justify-content: center;
		-webkit-justify-content: center;
		-ms-justify-content: center;
		justify-content: center;
		background-image: url(\"images/overlay.png\"), url(\"images/pattern-size1.svg\");
		background-position: top left, center center;
		background-attachment: fixed, fixed;
		background-size: auto, cover;
		height: 100vh;
		min-height: 35em;
	}

		#header input[type=\"submit\"],
		#header input[type=\"reset\"],
		#header input[type=\"button\"],
		#header button,
		#header .button {
			background-color: transparent;
			color: #ffffff !important;
			box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.25);
		}

			#header input[type=\"submit\"]:hover,
			#header input[type=\"reset\"]:hover,
			#header input[type=\"button\"]:hover,
			#header button:hover,
			#header .button:hover {
				background-color: rgba(255, 255, 255, 0.075);
			}

			#header input[type=\"submit\"]:active,
			#header input[type=\"reset\"]:active,
			#header input[type=\"button\"]:active,
			#header button:active,
			#header .button:active {
				background-color: rgba(255, 255, 255, 0.2);
			}

			#header input[type=\"submit\"].special,
			#header input[type=\"reset\"].special,
			#header input[type=\"button\"].special,
			#header button.special,
			#header .button.special {
				box-shadow: none;
				background-color: #ffffff;
				color: #4696e5 !important;
			}

		#header label {
			color: #ffffff;
		}

		#header input[type=\"text\"],
		#header input[type=\"password\"],
		#header input[type=\"email\"],
		#header select,
		#header textarea {
			color: inherit;
			background-color: rgba(255, 255, 255, 0.075);
			border-color: rgba(255, 255, 255, 0.25);
		}

			#header input[type=\"text\"]:focus,
			#header input[type=\"password\"]:focus,
			#header input[type=\"email\"]:focus,
			#header select:focus,
			#header textarea:focus {
				border-color: #ffffff;
				box-shadow: 0 0 0 1px #ffffff;
			}

		#header .select-wrapper:before {
			color: rgba(255, 255, 255, 0.25);
		}

		#header input[type=\"checkbox\"] + label,
		#header input[type=\"radio\"] + label {
			color: #d0e4f8;
		}

			#header input[type=\"checkbox\"] + label:before,
			#header input[type=\"radio\"] + label:before {
				background-color: rgba(255, 255, 255, 0.075);
				border-color: rgba(255, 255, 255, 0.25);
			}

		#header input[type=\"checkbox\"]:checked + label:before,
		#header input[type=\"radio\"]:checked + label:before {
			background-color: #ffffff;
			border-color: #ffffff;
			color: #4696e5;
		}

		#header input[type=\"checkbox\"]:focus + label:before,
		#header input[type=\"radio\"]:focus + label:before {
			border-color: #ffffff;
			box-shadow: 0 0 0 1px #ffffff;
		}

		#header ::-webkit-input-placeholder {
			color: #b5d5f4 !important;
		}

		#header :-moz-placeholder {
			color: #b5d5f4 !important;
		}

		#header ::-moz-placeholder {
			color: #b5d5f4 !important;
		}

		#header :-ms-input-placeholder {
			color: #b5d5f4 !important;
		}

		#header .formerize-placeholder {
			color: #b5d5f4 !important;
		}

		#header .icon {
			color: #b5d5f4;
		}

		#header .image {
			box-shadow: 0 0 0 4px #4696e5, 0 0 0 5px rgba(255, 255, 255, 0.25);
		}

			#header .image.phone {
				box-shadow: none;
			}

				#header .image.phone .inner, #header .image.phone:before, #header .image.phone:after {
					border-color: rgba(255, 255, 255, 0.25);
				}

				#header .image.phone .inner:before {
					background: rgba(255, 255, 255, 0.25);
				}

				#header .image.phone .inner:after {
					border-color: rgba(255, 255, 255, 0.25);
				}

		#header ul.alt > li {
			border-top-color: rgba(255, 255, 255, 0.25);
		}

		#header table tbody tr {
			border-color: rgba(255, 255, 255, 0.25);
		}

			#header table tbody tr:nth-child(2n + 1) {
				background-color: rgba(255, 255, 255, 0.075);
			}

		#header table th {
			color: #ffffff;
		}

		#header table thead {
			border-bottom-color: rgba(255, 255, 255, 0.25);
		}

		#header table tfoot {
			border-top-color: rgba(255, 255, 255, 0.25);
		}

		#header table.alt tbody tr td {
			border-color: rgba(255, 255, 255, 0.25);
		}

		#header input, #header select, #header textarea {
			color: #d0e4f8;
		}

		#header a {
			color: inherit;
			border-bottom-color: rgba(255, 255, 255, 0.5);
			color: #ffffff;
		}

		#header strong, #header b {
			color: #ffffff;
		}

		#header h1, #header h2, #header h3, #header h4, #header h5, #header h6 {
			color: #ffffff;
		}

		#header blockquote {
			border-left-color: rgba(255, 255, 255, 0.25);
		}

		#header code {
			background: rgba(255, 255, 255, 0.075);
			border-color: rgba(255, 255, 255, 0.25);
		}

		#header hr {
			border-bottom-color: rgba(255, 255, 255, 0.25);
		}

		#header h1 {
			font-size: 3.25em;
			font-weight: bold;
			margin-bottom: 0.5em;
		}

		#header p {
			font-size: 1.5em;
			line-height: 1.35em;
		}

			#header p br {
				display: inline;
			}

		#header .content {
			-moz-transition: opacity 0.5s ease, -moz-transform 1s ease;
			-webkit-transition: opacity 0.5s ease, -webkit-transform 1s ease;
			-ms-transition: opacity 0.5s ease, -ms-transform 1s ease;
			transition: opacity 0.5s ease, transform 1s ease;
			-moz-transform: translateX(0);
			-webkit-transform: translateX(0);
			-ms-transform: translateX(0);
			transform: translateX(0);
			opacity: 1;
			text-align: right;
			margin: -3.5em 4em 0 0;
		}

			#header .content > :last-child {
				margin-bottom: 0;
			}

		#header .image {
			-moz-transition: opacity 1s ease, -moz-transform 1s ease;
			-webkit-transition: opacity 1s ease, -webkit-transform 1s ease;
			-ms-transition: opacity 1s ease, -ms-transform 1s ease;
			transition: opacity 1s ease, transform 1s ease;
			-moz-transform: translateY(0);
			-webkit-transform: translateY(0);
			-ms-transform: translateY(0);
			transform: translateY(0);
			opacity: 1;
		}

			#header .image img {
				-moz-transition: opacity 0.75s ease;
				-webkit-transition: opacity 0.75s ease;
				-ms-transition: opacity 0.75s ease;
				transition: opacity 0.75s ease;
				-moz-transition-delay: 0.75s;
				-webkit-transition-delay: 0.75s;
				-ms-transition-delay: 0.75s;
				transition-delay: 0.75s;
				opacity: 1;
			}

		@media screen and (max-width: 1280px) {

			#header {
				background-image: url(\"images/overlay.png\"), url(\"images/pattern-size2.svg\");
			}

		}

		@media screen and (max-width: 980px) {

			#header {
				height: auto;
				min-height: 0;
			}

				#header .content {
					margin: -2em 4em 0 0;
				}

		}

		@media screen and (max-width: 980px) and (orientation: portrait) {

			#header {
				padding: 6em 3em 4em 3em ;
				-moz-flex-direction: column-reverse;
				-webkit-flex-direction: column-reverse;
				-ms-flex-direction: column-reverse;
				flex-direction: column-reverse;
			}

				#header .content {
					display: block;
					width: 100%;
					text-align: center;
					margin: 0 0 2em 0;
				}

				#header .image {
					overflow: hidden;
				}

		}

		@media screen and (max-width: 736px) {

			#header {
				background-image: url(\"images/overlay.png\"), url(\"images/pattern-size3.svg\");
			}

				#header h1 {
					font-size: 2em;
				}

				#header p {
					font-size: 1em;
					line-height: inherit;
				}

		}

		@media screen and (max-width: 736px) and (orientation: landscape) {

			#header {
				padding: 2em 2em 0.1em 2em ;
			}

				#header .content {
					margin: 0 2em 2em 0;
				}

				#header .image {
					font-size: 0.8em;
					width: 15em;
					max-width: 20vw;
				}

					#header .image .inner, #header .image:before, #header .image:after {
						font-size: 0.8em;
					}

		}

		@media screen and (max-width: 736px) and (orientation: portrait) {

			#header {
				padding: 3em 1.5em 1em 1.5em ;
			}

				#header .image {
					font-size: 0.6em;
					max-width: 60vw;
				}

		}

	@media screen and (max-width: 480px) and (orientation: landscape) {

		#header {
			padding: 2em 1.5em 0.1em 1.5em ;
		}

			#header .image {
				font-size: 0.7em;
			}

			#header .actions {
				font-size: 0.8em;
			}

	}

	@media screen and (max-width: 480px) and (orientation: portrait) {

		#header {
			padding: 2em 1em 0.1em 1em ;
		}

	}

		body.is-mobile #header {
			background-attachment: scroll, scroll;
		}

		body.is-loading #header .content {
			-moz-transform: translateX(2em);
			-webkit-transform: translateX(2em);
			-ms-transform: translateX(2em);
			transform: translateX(2em);
			opacity: 0;
		}

		body.is-loading #header .image {
			-moz-transform: translateY(4em);
			-webkit-transform: translateY(4em);
			-ms-transform: translateY(4em);
			transform: translateY(4em);
			opacity: 0;
		}

			body.is-loading #header .image img {
				opacity: 0;
			}

	@media screen and (max-width: 980px) and (orientation: portrait) {

		body.is-loading #header .content {
			-moz-transform: none;
			-webkit-transform: none;
			-ms-transform: none;
			transform: none;
			opacity: 1;
		}

		body.is-loading #header .image {
			-moz-transform: translateY(2em);
			-webkit-transform: translateY(2em);
			-ms-transform: translateY(2em);
			transform: translateY(2em);
		}

	}

/* Main */

	#main {
		padding: 4em 0 2em 0 ;
	}

		@media screen and (max-width: 736px) {

			#main {
				padding: 3em 0 1em 0 ;
			}

		}

/* Footer */

	#footer {
		background-color: #f7f7f7;
		color: #999999;
		padding: 4.5em 0 2.5em 0 ;
		color: #b0b0b0;
		text-align: center;
	}

		#footer input, #footer select, #footer textarea {
			color: #999999;
		}

		#footer a {
			color: inherit;
			border-bottom-color: #c6c6c6;
		}

			#footer a:hover {
				color: #4696e5;
			}

		#footer strong, #footer b {
			color: #828282;
		}

		#footer h1, #footer h2, #footer h3, #footer h4, #footer h5, #footer h6 {
			color: #828282;
		}

		#footer blockquote {
			border-left-color: #d6d6d6;
		}

		#footer code {
			background: rgba(144, 144, 144, 0.075);
			border-color: #d6d6d6;
		}

		#footer hr {
			border-bottom-color: #d6d6d6;
		}

		#footer a {
			color: inherit;
		}

		#footer .copyright {
			font-size: 0.8em;
		}

		@media screen and (max-width: 980px) {

			#footer {
				padding: 4em 4em 2em 4em ;
			}

		}

	@media screen and (max-width: 736px) and (orientation: landscape) {

		#footer {
			padding: 3em 3em 1em 3em ;
		}

	}

	@media screen and (max-width: 736px) and (orientation: portrait) {

		#footer {
			padding: 3em 1.5em 1em 1.5em ;
		}

	}
";?>