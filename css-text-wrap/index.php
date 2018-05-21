<!DocType html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

		<title>CSS Shapes for Wrapping Text &nbsp;&middot;&nbsp; eustasy Labs</title>

		<link rel="icon" href="https://labs.eustasy.org/favicon.ico">
		<link rel="shortcut icon" href="https://labs.eustasy.org/favicon.ico">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300|Open+Sans:300|Nunito:300,400">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/gh/eustasy/Colors.css@1/colors.min.css,gh/necolas/normalize.css@8/normalize.min.css">

		<style>
			h1 { font: 300 3em/1 'Lato', sans-serif; text-transform: uppercase; margin-bottom: -.5rem; }
			h2 { font: 300 2em/1 'Open Sans', sans-serif; text-transform: uppercase; }
			body { font: 300 1em/1 'Nunito', sans-serif; padding: 1rem 1rem 1rem 3rem; }
			b, strong { font-weight: 400; }
			p { text-align: justify; }
			img { max-height: 100vh; max-width: 100vw; }
			.float-left { float: left; }
			.float-right { float: right; }
			.shaped { shape-outside: polygon(30% 0, 100% 0, 100% 100%, 8% 100%); margin: -1rem; }
			a { text-decoration: none; }
			a:hover { text-decoration: underline; }
			@media screen and (min-width: 80rem) { body { padding-left: 30vw; } }
		</style>

		<script src="https://cdn.jsdelivr.net/combine/gh/LeaVerou/prefixfree@1/prefixfree.min.js,gh/chuckcarpenter/REM-unit-polyfill@1/js/rem.min.js"></script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-45667989-11', 'eustasy.org');
			ga('send', 'pageview');
		</script>

	</head>
	<body>

		<img class="shaped float-right" src="eiffel-tower_compressed.jpg" />

		<h1>La Tour Eiffel</h1>
		<h2>The Eiffel Tower</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc justo massa, mattis in imperdiet in, pellentesque sit amet elit. Fusce vitae pulvinar nisi. Ut sed justo nec est congue cursus vestibulum eu dolor. Donec at mauris felis, sit amet ultrices odio. Aliquam erat volutpat. Nullam faucibus metus eu elit luctus sed malesuada risus molestie. Mauris nulla quam, tristique at lobortis at, fringilla quis nibh. Ut sapien mauris, imperdiet eget tincidunt semper, consectetur a augue. Donec vitae nibh augue, ut rhoncus elit. Nullam volutpat lorem sed odio lacinia non aliquet erat consequat. In ac libero turpis. In commodo nisl id diam dapibus varius. Sed lobortis ultricies ligula, quis auctor arcu imperdiet eget. Donec vel ipsum dui. In justo purus, molestie sit amet mattis sed, cursus non orci. Nullam ac massa vel tortor scelerisque blandit quis a sapien.</p>
		<p>Morbi ipsum massa, commodo in auctor a, tincidunt et nisl. In hac habitasse platea dictumst. Fusce molestie, leo ut pellentesque posuere, dui nunc dignissim massa, non aliquet felis sem nec nisl. In pellentesque condimentum tellus, sed hendrerit dolor porttitor vel. Nam dapibus urna a sem semper non porttitor nulla varius. Morbi libero metus, dictum vel viverra aliquet, fringilla vitae tellus. Maecenas ac libero mauris. Pellentesque vitae urna erat, lobortis venenatis ipsum. Ut nec gravida arcu. Suspendisse at risus nulla. Vivamus dictum tempus enim at pellentesque. Curabitur ac tellus ligula, non tristique risus. Nunc vitae ipsum nec libero consectetur tincidunt nec eu nisl. Fusce odio nisi, hendrerit nec aliquam in, dignissim et magna. Nullam tempor condimentum ligula vel cursus. Pellentesque ut sapien at ligula pellentesque congue ut ut turpis.</p>
		<!-- ignore http:// --><p>Uses <strong>shape-outside</strong>. <span class="color-pomegranate">Warning!</span> <a class="color-belize-hole" target="_blank" href="http://caniuse.com/#search=shape-outside">Not well supported.</a></p>

	</body>
</html>
