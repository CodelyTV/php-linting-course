<?php

declare(strict_types=1);

namespace CodelyTv\Shared\Domain\ValueObject;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid as RamseyUuid;
use Stringable;

final class Uuid implements Stringable
{
	public function __construct(protected string $value)
	{
		$this->ensureIsValidUuid($value);
	}

	public static function random(): self
	{
		return new self(RamseyUuid::uuid4()->toString());
	}

	public function value(): string
	{
		return $this->value;
	}

	public function equals(self $other): bool
	{
		return $this->value() === $other->value();
	}

	public function __toString(): string
	{
		return $this->value();
	}

	private function ensureIsValidUuid(string $id): void
	{
		if (!RamseyUuid::isValid($id)) {
			throw new InvalidArgumentException(sprintf('<%s> does not allow the value <%s>.', self::class, $id));
		}
	}
}
