<?php
namespace Microsoft\Kiota\Abstractions\Serialization;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Enum;
use Psr\Http\Message\StreamInterface;

/** Defines an interface for serialization of objects to a stream. */
interface SerializationWriter {
    /**
     * Writes the specified string value to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param string $value the value to write to the stream.
     */
    public function writeStringValue(?string $key, string $value): void;

    /**
     * Writes the specified Boolean value to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param bool $value the value to write to the stream.
     */
    public function writeBooleanValue(?string $key, bool $value): void;

    /**
     * Writes the specified Float value to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param float $value the value to write to the stream.
     */
    public function writeFloatValue(?string $key, float $value): void;

    /**
     * Writes the specified Integer value to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param int $value the value to write to the stream.
     */
    public function writeIntegerValue(?string $key, int $value): void;

    /**
     * Writes the specified Long value to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param int $value the value to write to the stream.
     */
    public function writeLongValue(?string $key, int $value): void;


    /**
     * Writes the specified UUID value to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param string $value the value to write to the stream.
     */
    public function writeUUIDValue(?string $key, string $value): void;

    /**
     * Writes the specified OffsetDateTime value to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param DateTime $value the value to write to the stream.
     */
    public function writeDateTimeOffsetValue(?string $key, DateTime $value): void;

    /**
     * Writes the specified collection of object values to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param array<Parsable> $values
     */
    public function writeCollectionOfObjectValues(?string $key, array $values): void;

    /**
     * Writes the specified model object value to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param Parsable|object $value the value to write to the stream.
     */
    public function writeObjectValue(?string $key, $value): void;

    /**
     * Gets the value of the serialized content.
     * @return StreamInterface the value of the serialized content.
     */
    public function getSerializedContent(): StreamInterface;

    /**
     * Writes the specified enum set value to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param array<Enum> $values the value to write to the stream.
     */
    public function writeEnumSetValue(?string $key, array $values): void;

    /**
     * Writes the specified enum value to the stream with an optional given key.
     * @param string|null $key the key to write the value with.
     * @param Enum $value the value to write to the stream.
     */
    public function writeEnumValue(?string $key, Enum $value): void;

    /**
     * Writes a null value for the specified key.
     * @param string|null $key the key to write the value with.
     */
    public function writeNullValue(?string $key): void;

    /**
     * Writes the specified additional data values to the stream with an optional given key.
     * @param array<string,mixed> $value the values to write to the stream.
     */
    public function writeAdditionalData(array $value): void;

    /**
     * Sets the callback called before the objects gets serialized.
     * @param callable $value the callback called before the objects gets serialized.
     */
    public function setOnBeforeObjectSerialization(callable $value): void;

    /**
     * Gets the callback called before the object gets serialized.
     * @return callable the callback called before the object gets serialized.
     */
    public function getOnBeforeObjectSerialization(): callable;

    /**
     * Sets the callback called after the objects gets serialized.
     * @param callable $value the callback called after the objects gets serialized.
     */
    public function setOnAfterObjectSerialization(callable $value): void;

    /**
     * Gets the callback called after the object gets serialized.
     * @return callable the callback called after the object gets serialized.
     */
    public function getOnAfterObjectSerialization(): callable;

    /**
     * Sets the callback called right after the serialization process starts.
     * @param callable $value the callback called right after the serialization process starts.
     */
    public function setOnStartObjectSerialization(callable $value): void;

    /**
     * Gets the callback called right after the serialization process starts.
     * @return callable the callback called right after the serialization process starts.
     */
    public function getOnStartObjectSerialization(): callable;
}
