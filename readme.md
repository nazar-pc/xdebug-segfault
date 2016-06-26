Xdebug segfault issue

```
~> sudo phpdismod xdebug
~> php index.php 
<div>
	<table>
		<tr>
			<td>Col 1</td>
			<td></td>
		</tr>
		<tr class="class">
			<td>Col 1</td>
			<td></td>
		</tr>
	</table>
</div>
~> sudo phpenmod xdebug
~> php index.php 
fish: “php index.php” terminated by signal SIGSEGV (Address boundary error)
~> php -v
PHP 7.0.7-4ubuntu2 (cli) ( NTS )
Copyright (c) 1997-2016 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2016 Zend Technologies
    with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2016, by Zend Technologies
    with Xdebug v2.4.0, Copyright (c) 2002-2016, by Derick Rethans
    with blackfire v1.10.6, https://blackfire.io, by Blackfireio Inc.
~> uname -a
Linux nazar-pc 4.7.0-rc4-haswell #2 SMP Wed Jun 22 04:05:10 EEST 2016 x86_64 x86_64 x86_64 GNU/Linux
~> lsb_release -a
No LSB modules are available.
Distributor ID:	Ubuntu
Description:	Ubuntu Yakkety Yak (development branch)
Release:	16.10
Codename:	yakkety
```