/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package swagger.models;

import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * Switch Post Model.
 */
public class SwitchPostModel {
    /**
     * Gets or sets the name.
     */
    @JsonProperty(value = "name")
    private String name;

    /**
     * Gets or sets the description.
     */
    @JsonProperty(value = "description")
    private String description;

    /**
     * Gets or sets the comment.
     */
    @JsonProperty(value = "comment")
    private String comment;

    /**
     * Gets or sets the value.
     */
    @JsonProperty(value = "value")
    private String value;

    /**
     * Gets or sets the type of the value.
     */
    @JsonProperty(value = "valueType")
    private String valueType;

    /**
     * Get gets or sets the name.
     *
     * @return the name value
     */
    public String name() {
        return this.name;
    }

    /**
     * Set gets or sets the name.
     *
     * @param name the name value to set
     * @return the SwitchPostModel object itself.
     */
    public SwitchPostModel withName(String name) {
        this.name = name;
        return this;
    }

    /**
     * Get gets or sets the description.
     *
     * @return the description value
     */
    public String description() {
        return this.description;
    }

    /**
     * Set gets or sets the description.
     *
     * @param description the description value to set
     * @return the SwitchPostModel object itself.
     */
    public SwitchPostModel withDescription(String description) {
        this.description = description;
        return this;
    }

    /**
     * Get gets or sets the comment.
     *
     * @return the comment value
     */
    public String comment() {
        return this.comment;
    }

    /**
     * Set gets or sets the comment.
     *
     * @param comment the comment value to set
     * @return the SwitchPostModel object itself.
     */
    public SwitchPostModel withComment(String comment) {
        this.comment = comment;
        return this;
    }

    /**
     * Get gets or sets the value.
     *
     * @return the value value
     */
    public String value() {
        return this.value;
    }

    /**
     * Set gets or sets the value.
     *
     * @param value the value value to set
     * @return the SwitchPostModel object itself.
     */
    public SwitchPostModel withValue(String value) {
        this.value = value;
        return this;
    }

    /**
     * Get gets or sets the type of the value.
     *
     * @return the valueType value
     */
    public String valueType() {
        return this.valueType;
    }

    /**
     * Set gets or sets the type of the value.
     *
     * @param valueType the valueType value to set
     * @return the SwitchPostModel object itself.
     */
    public SwitchPostModel withValueType(String valueType) {
        this.valueType = valueType;
        return this;
    }

}
