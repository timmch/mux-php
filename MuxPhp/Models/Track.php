<?php
/**
 * Track
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
 * Track Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 * @author   Mux API team
 * @link     https://docs.mux.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class Track implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Track';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'type' => 'string',
        'duration' => 'double',
        'max_width' => 'int',
        'max_height' => 'int',
        'max_frame_rate' => 'double',
        'max_channels' => 'int',
        'max_channel_layout' => 'string',
        'text_type' => 'string',
        'text_source' => 'string',
        'language_code' => 'string',
        'name' => 'string',
        'closed_captions' => 'bool',
        'passthrough' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'type' => null,
        'duration' => 'double',
        'max_width' => 'int64',
        'max_height' => 'int64',
        'max_frame_rate' => 'double',
        'max_channels' => 'int64',
        'max_channel_layout' => null,
        'text_type' => null,
        'text_source' => null,
        'language_code' => null,
        'name' => null,
        'closed_captions' => null,
        'passthrough' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
	 'type' => false,
	 'duration' => false,
	 'max_width' => false,
	 'max_height' => false,
	 'max_frame_rate' => false,
	 'max_channels' => false,
	 'max_channel_layout' => false,
	 'text_type' => false,
	 'text_source' => false,
	 'language_code' => false,
	 'name' => false,
	 'closed_captions' => false,
	 'passthrough' => false,
	 'status' => false
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
        'id' => 'id',
        'type' => 'type',
        'duration' => 'duration',
        'max_width' => 'max_width',
        'max_height' => 'max_height',
        'max_frame_rate' => 'max_frame_rate',
        'max_channels' => 'max_channels',
        'max_channel_layout' => 'max_channel_layout',
        'text_type' => 'text_type',
        'text_source' => 'text_source',
        'language_code' => 'language_code',
        'name' => 'name',
        'closed_captions' => 'closed_captions',
        'passthrough' => 'passthrough',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'duration' => 'setDuration',
        'max_width' => 'setMaxWidth',
        'max_height' => 'setMaxHeight',
        'max_frame_rate' => 'setMaxFrameRate',
        'max_channels' => 'setMaxChannels',
        'max_channel_layout' => 'setMaxChannelLayout',
        'text_type' => 'setTextType',
        'text_source' => 'setTextSource',
        'language_code' => 'setLanguageCode',
        'name' => 'setName',
        'closed_captions' => 'setClosedCaptions',
        'passthrough' => 'setPassthrough',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'duration' => 'getDuration',
        'max_width' => 'getMaxWidth',
        'max_height' => 'getMaxHeight',
        'max_frame_rate' => 'getMaxFrameRate',
        'max_channels' => 'getMaxChannels',
        'max_channel_layout' => 'getMaxChannelLayout',
        'text_type' => 'getTextType',
        'text_source' => 'getTextSource',
        'language_code' => 'getLanguageCode',
        'name' => 'getName',
        'closed_captions' => 'getClosedCaptions',
        'passthrough' => 'getPassthrough',
        'status' => 'getStatus'
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
    public const TEXT_SOURCE_UPLOADED = 'uploaded';
    public const TEXT_SOURCE_EMBEDDED = 'embedded';
    public const TEXT_SOURCE_GENERATED_LIVE = 'generated_live';
    public const TEXT_SOURCE_GENERATED_LIVE_FINAL = 'generated_live_final';
    public const STATUS_PREPARING = 'preparing';
    public const STATUS_READY = 'ready';
    public const STATUS_ERRORED = 'errored';
    public const STATUS_DELETED = 'deleted';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTextSourceAllowableValues()
    {
        return [
            self::TEXT_SOURCE_UPLOADED,
            self::TEXT_SOURCE_EMBEDDED,
            self::TEXT_SOURCE_GENERATED_LIVE,
            self::TEXT_SOURCE_GENERATED_LIVE_FINAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PREPARING,
            self::STATUS_READY,
            self::STATUS_ERRORED,
            self::STATUS_DELETED,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('max_width', $data ?? [], null);
        $this->setIfExists('max_height', $data ?? [], null);
        $this->setIfExists('max_frame_rate', $data ?? [], null);
        $this->setIfExists('max_channels', $data ?? [], null);
        $this->setIfExists('max_channel_layout', $data ?? [], null);
        $this->setIfExists('text_type', $data ?? [], null);
        $this->setIfExists('text_source', $data ?? [], null);
        $this->setIfExists('language_code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('closed_captions', $data ?? [], null);
        $this->setIfExists('passthrough', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        $allowedValues = $this->getTextSourceAllowableValues();
        if (!is_null($this->container['text_source']) && !in_array($this->container['text_source'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'text_source', must be one of '%s'",
                $this->container['text_source'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier for the Track
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

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
     * @param string|null $type The type of track
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
     * Gets duration
     *
     * @return double|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param double|null $duration The duration in seconds of the track media. This parameter is not set for `text` type tracks. This field is optional and may not be set. The top level `duration` field of an asset will always be set.
     *
     * @return self
     */
    public function setDuration($duration)
    {

        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }

        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets max_width
     *
     * @return int|null
     */
    public function getMaxWidth()
    {
        return $this->container['max_width'];
    }

    /**
     * Sets max_width
     *
     * @param int|null $max_width The maximum width in pixels available for the track. Only set for the `video` type track.
     *
     * @return self
     */
    public function setMaxWidth($max_width)
    {

        if (is_null($max_width)) {
            throw new \InvalidArgumentException('non-nullable max_width cannot be null');
        }

        $this->container['max_width'] = $max_width;

        return $this;
    }

    /**
     * Gets max_height
     *
     * @return int|null
     */
    public function getMaxHeight()
    {
        return $this->container['max_height'];
    }

    /**
     * Sets max_height
     *
     * @param int|null $max_height The maximum height in pixels available for the track. Only set for the `video` type track.
     *
     * @return self
     */
    public function setMaxHeight($max_height)
    {

        if (is_null($max_height)) {
            throw new \InvalidArgumentException('non-nullable max_height cannot be null');
        }

        $this->container['max_height'] = $max_height;

        return $this;
    }

    /**
     * Gets max_frame_rate
     *
     * @return double|null
     */
    public function getMaxFrameRate()
    {
        return $this->container['max_frame_rate'];
    }

    /**
     * Sets max_frame_rate
     *
     * @param double|null $max_frame_rate The maximum frame rate available for the track. Only set for the `video` type track. This field may return `-1` if the frame rate of the input cannot be reliably determined.
     *
     * @return self
     */
    public function setMaxFrameRate($max_frame_rate)
    {

        if (is_null($max_frame_rate)) {
            throw new \InvalidArgumentException('non-nullable max_frame_rate cannot be null');
        }

        $this->container['max_frame_rate'] = $max_frame_rate;

        return $this;
    }

    /**
     * Gets max_channels
     *
     * @return int|null
     */
    public function getMaxChannels()
    {
        return $this->container['max_channels'];
    }

    /**
     * Sets max_channels
     *
     * @param int|null $max_channels The maximum number of audio channels the track supports. Only set for the `audio` type track.
     *
     * @return self
     */
    public function setMaxChannels($max_channels)
    {

        if (is_null($max_channels)) {
            throw new \InvalidArgumentException('non-nullable max_channels cannot be null');
        }

        $this->container['max_channels'] = $max_channels;

        return $this;
    }

    /**
     * Gets max_channel_layout
     *
     * @return string|null
     */
    public function getMaxChannelLayout()
    {
        return $this->container['max_channel_layout'];
    }

    /**
     * Sets max_channel_layout
     *
     * @param string|null $max_channel_layout Only set for the `audio` type track.
     *
     * @return self
     */
    public function setMaxChannelLayout($max_channel_layout)
    {

        if (is_null($max_channel_layout)) {
            throw new \InvalidArgumentException('non-nullable max_channel_layout cannot be null');
        }

        $this->container['max_channel_layout'] = $max_channel_layout;

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
     * @param string|null $text_type This parameter is only set for `text` type tracks.
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
     * Gets text_source
     *
     * @return string|null
     */
    public function getTextSource()
    {
        return $this->container['text_source'];
    }

    /**
     * Sets text_source
     *
     * @param string|null $text_source The source of the text contained in a Track of type `text`. Valid `text_source` values are listed below. * `uploaded`: Tracks uploaded to Mux as caption or subtitle files using the Create Asset Track API. * `embedded`: Tracks extracted from an embedded stream of CEA-608 closed captions. * `generated_live`: Tracks generated by automatic speech recognition on a live stream configured with `generated_subtitles`. If an Asset has both `generated_live` and `generated_live_final` tracks that are `ready`, then only the `generated_live_final` track will be included during playback. * `generated_live_final`: Tracks generated by automatic speech recognition on a live stream using `generated_subtitles`. The accuracy, timing, and formatting of these subtitles is improved compared to the corresponding `generated_live` tracks. However, `generated_live_final` tracks will not be available in `ready` status until the live stream ends. If an Asset has both `generated_live` and `generated_live_final` tracks that are `ready`, then only the `generated_live_final` track will be included during playback.
     *
     * @return self
     */
    public function setTextSource($text_source)
    {
        $allowedValues = $this->getTextSourceAllowableValues();
        if (!is_null($text_source) && !in_array($text_source, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'text_source', must be one of '%s'",
                    $text_source,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($text_source)) {
            throw new \InvalidArgumentException('non-nullable text_source cannot be null');
        }

        $this->container['text_source'] = $text_source;

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
     * @param string|null $language_code The language code value represents [BCP 47](https://tools.ietf.org/html/bcp47) specification compliant value. For example, `en` for English or `en-US` for the US version of English. This parameter is only set for `text` type and `subtitles` text type tracks.
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
     * @param string|null $name The name of the track containing a human-readable description. The hls manifest will associate a subtitle text track with this value. For example, the value is \"English\" for subtitles text track for the `language_code` value of `en-US`. This parameter is only set for `text` type and `subtitles` text type tracks.
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
     * @param bool|null $closed_captions Indicates the track provides Subtitles for the Deaf or Hard-of-hearing (SDH). This parameter is only set for `text` type and `subtitles` text type tracks.
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
     * @param string|null $passthrough Arbitrary user-supplied metadata set for the track either when creating the asset or track. This parameter is only set for `text` type tracks. Max 255 characters.
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the track. This parameter is only set for `text` type tracks.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

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


