<?php
/**
 * InputSettings
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 */

/**
 * Mux API
 *
 * Mux is how developers build online video. This API encompasses both Mux Video and Mux Data functionality to help you build your video-related projects better and faster than ever before.
 *
 * The version of the OpenAPI document: v1
 * Contact: devex@mux.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MuxPhp\Models;

use \ArrayAccess;
use \MuxPhp\ObjectSerializer;

/**
 * InputSettings Class Doc Comment
 *
 * @category Class
 * @description An array of objects that each describe an input file to be used to create the asset. As a shortcut, &#x60;input&#x60; can also be a string URL for a file when only one input file is used. See &#x60;input[].url&#x60; for requirements.
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class InputSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InputSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'overlay_settings' => '\MuxPhp\Models\InputSettingsOverlaySettings',
        'start_time' => 'double',
        'end_time' => 'double',
        'type' => 'string',
        'text_type' => 'string',
        'language_code' => 'string',
        'name' => 'string',
        'closed_captions' => 'bool',
        'passthrough' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url' => null,
        'overlay_settings' => null,
        'start_time' => 'double',
        'end_time' => 'double',
        'type' => null,
        'text_type' => null,
        'language_code' => null,
        'name' => null,
        'closed_captions' => null,
        'passthrough' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'url' => false,
        'overlay_settings' => false,
        'start_time' => false,
        'end_time' => false,
        'type' => false,
        'text_type' => false,
        'language_code' => false,
        'name' => false,
        'closed_captions' => false,
        'passthrough' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'url' => 'url',
        'overlay_settings' => 'overlay_settings',
        'start_time' => 'start_time',
        'end_time' => 'end_time',
        'type' => 'type',
        'text_type' => 'text_type',
        'language_code' => 'language_code',
        'name' => 'name',
        'closed_captions' => 'closed_captions',
        'passthrough' => 'passthrough'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'overlay_settings' => 'setOverlaySettings',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'type' => 'setType',
        'text_type' => 'setTextType',
        'language_code' => 'setLanguageCode',
        'name' => 'setName',
        'closed_captions' => 'setClosedCaptions',
        'passthrough' => 'setPassthrough'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'overlay_settings' => 'getOverlaySettings',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'type' => 'getType',
        'text_type' => 'getTextType',
        'language_code' => 'getLanguageCode',
        'name' => 'getName',
        'closed_captions' => 'getClosedCaptions',
        'passthrough' => 'getPassthrough'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const TYPE_VIDEO = 'video';
    public const TYPE_AUDIO = 'audio';
    public const TYPE_TEXT = 'text';
    public const TEXT_TYPE_SUBTITLES = 'subtitles';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VIDEO,
            self::TYPE_AUDIO,
            self::TYPE_TEXT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextTypeAllowableValues()
    {
        return [
            self::TEXT_TYPE_SUBTITLES,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        // MUX: enum hack (self::) due to OAS emitting problems.
        //      please re-integrate with mainline when possible.
        //      src: https://github.com/OpenAPITools/openapi-generator/issues/9038
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('overlay_settings', $data ?? [], null);
        $this->setIfExists('start_time', $data ?? [], null);
        $this->setIfExists('end_time', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('text_type', $data ?? [], null);
        $this->setIfExists('language_code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('closed_captions', $data ?? [], null);
        $this->setIfExists('passthrough', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTextTypeAllowableValues();
        if (!is_null($this->container['text_type']) && !in_array($this->container['text_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'text_type', must be one of '%s'",
                $this->container['text_type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url The URL of the file that Mux should download and use. * For subtitles text tracks, the URL is the location of subtitle/captions file. Mux supports [SubRip Text (SRT)](https://en.wikipedia.org/wiki/SubRip) and [Web Video Text Tracks](https://www.w3.org/TR/webvtt1/) format for ingesting Subtitles and Closed Captions. * For Watermarking or Overlay, the URL is the location of the watermark image. * When creating clips from existing Mux assets, the URL is defined with `mux://assets/{asset_id}` template where `asset_id` is the Asset Identifier for creating the clip from.
     *
     * @return self
     */
    public function setUrl($url)
    {

        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets overlay_settings
     *
     * @return \MuxPhp\Models\InputSettingsOverlaySettings|null
     */
    public function getOverlaySettings()
    {
        return $this->container['overlay_settings'];
    }

    /**
     * Sets overlay_settings
     *
     * @param \MuxPhp\Models\InputSettingsOverlaySettings|null $overlay_settings overlay_settings
     *
     * @return self
     */
    public function setOverlaySettings($overlay_settings)
    {

        if (is_null($overlay_settings)) {
            throw new \InvalidArgumentException('non-nullable overlay_settings cannot be null');
        }

        $this->container['overlay_settings'] = $overlay_settings;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return double|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param double|null $start_time The time offset in seconds from the beginning of the video indicating the clip's starting marker. The default value is 0 when not included. This parameter is only applicable for creating clips when `input.url` has `mux://assets/{asset_id}` format.
     *
     * @return self
     */
    public function setStartTime($start_time)
    {

        if (is_null($start_time)) {
            throw new \InvalidArgumentException('non-nullable start_time cannot be null');
        }

        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return double|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param double|null $end_time The time offset in seconds from the beginning of the video, indicating the clip's ending marker. The default value is the duration of the video when not included. This parameter is only applicable for creating clips when `input.url` has `mux://assets/{asset_id}` format.
     *
     * @return self
     */
    public function setEndTime($end_time)
    {

        if (is_null($end_time)) {
            throw new \InvalidArgumentException('non-nullable end_time cannot be null');
        }

        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type This parameter is required for `text` type tracks.
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets text_type
     *
     * @return string|null
     */
    public function getTextType()
    {
        return $this->container['text_type'];
    }

    /**
     * Sets text_type
     *
     * @param string|null $text_type Type of text track. This parameter only supports subtitles value. For more information on Subtitles / Closed Captions, [see this blog post](https://mux.com/blog/subtitles-captions-webvtt-hls-and-those-magic-flags/). This parameter is required for `text` type tracks.
     *
     * @return self
     */
    public function setTextType($text_type)
    {
        $allowedValues = $this->getTextTypeAllowableValues();
        if (!is_null($text_type) && !in_array($text_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'text_type', must be one of '%s'",
                    $text_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($text_type)) {
            throw new \InvalidArgumentException('non-nullable text_type cannot be null');
        }

        $this->container['text_type'] = $text_type;

        return $this;
    }

    /**
     * Gets language_code
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string|null $language_code The language code value must be a valid [BCP 47](https://tools.ietf.org/html/bcp47) specification compliant value. For example, en for English or en-US for the US version of English. This parameter is required for text type and subtitles text type track.
     *
     * @return self
     */
    public function setLanguageCode($language_code)
    {

        if (is_null($language_code)) {
            throw new \InvalidArgumentException('non-nullable language_code cannot be null');
        }

        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the track containing a human-readable description. This value must be unique across all text type and subtitles `text` type tracks. The hls manifest will associate a subtitle text track with this value. For example, the value should be \"English\" for subtitles text track with language_code as en. This optional parameter should be used only for `text` type and subtitles `text` type tracks. If this parameter is not included, Mux will auto-populate based on the `input[].language_code` value.
     *
     * @return self
     */
    public function setName($name)
    {

        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets closed_captions
     *
     * @return bool|null
     */
    public function getClosedCaptions()
    {
        return $this->container['closed_captions'];
    }

    /**
     * Sets closed_captions
     *
     * @param bool|null $closed_captions Indicates the track provides Subtitles for the Deaf or Hard-of-hearing (SDH). This optional parameter should be used for `text` type and subtitles `text` type tracks.
     *
     * @return self
     */
    public function setClosedCaptions($closed_captions)
    {

        if (is_null($closed_captions)) {
            throw new \InvalidArgumentException('non-nullable closed_captions cannot be null');
        }

        $this->container['closed_captions'] = $closed_captions;

        return $this;
    }

    /**
     * Gets passthrough
     *
     * @return string|null
     */
    public function getPassthrough()
    {
        return $this->container['passthrough'];
    }

    /**
     * Sets passthrough
     *
     * @param string|null $passthrough This optional parameter should be used for `text` type and subtitles `text` type tracks.
     *
     * @return self
     */
    public function setPassthrough($passthrough)
    {

        if (is_null($passthrough)) {
            throw new \InvalidArgumentException('non-nullable passthrough cannot be null');
        }

        $this->container['passthrough'] = $passthrough;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


