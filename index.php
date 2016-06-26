<?php
require_once __DIR__.'/vendor/autoload.php';
echo \nazarpc\BananaHTML::{'div'}(
	\nazarpc\BananaHTML::table(
		\nazarpc\BananaHTML::{'tr td'}(
			'Col 1',
			''
		).
		\nazarpc\BananaHTML::{'tr.class td'}(
			'Col 1',
			''
		)
	)
);
