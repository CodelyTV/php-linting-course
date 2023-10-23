<?php

namespace CodelyTv;

final class Demo
{
	public function __construct()
	{
		echo 'Hello world!';
	}

	public function hello() {
		if (false)
		{
			echo 'Hello false world!';
		}
		else {
			echo 'Hello world!';
		}
	}

	public function __toString(): string {
		return 'Hello world!';
	}

	public function __invoke(): string{return 'Hello world!';}
}
