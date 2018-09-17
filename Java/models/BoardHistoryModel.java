/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package swagger.models;

import org.joda.time.DateTime;
import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * The Board History Model.
 */
public class BoardHistoryModel {
    /**
     * Gets or sets the board history identifier.
     */
    @JsonProperty(value = "boardHistoryId")
    private int boardHistoryId;

    /**
     * Gets or sets the board identifier.
     */
    @JsonProperty(value = "boardId")
    private int boardId;

    /**
     * Gets or sets the account identifier.
     */
    @JsonProperty(value = "accountId")
    private int accountId;

    /**
     * Gets or sets the created user identifier.
     */
    @JsonProperty(value = "createdUserId")
    private int createdUserId;

    /**
     * Gets or sets the modified user identifier.
     */
    @JsonProperty(value = "modifiedUserId")
    private int modifiedUserId;

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
     * Gets or sets the created date.
     */
    @JsonProperty(value = "createdDate")
    private DateTime createdDate;

    /**
     * Gets or sets the modified date.
     */
    @JsonProperty(value = "modifiedDate")
    private DateTime modifiedDate;

    /**
     * Get gets or sets the board history identifier.
     *
     * @return the boardHistoryId value
     */
    public int boardHistoryId() {
        return this.boardHistoryId;
    }

    /**
     * Set gets or sets the board history identifier.
     *
     * @param boardHistoryId the boardHistoryId value to set
     * @return the BoardHistoryModel object itself.
     */
    public BoardHistoryModel withBoardHistoryId(int boardHistoryId) {
        this.boardHistoryId = boardHistoryId;
        return this;
    }

    /**
     * Get gets or sets the board identifier.
     *
     * @return the boardId value
     */
    public int boardId() {
        return this.boardId;
    }

    /**
     * Set gets or sets the board identifier.
     *
     * @param boardId the boardId value to set
     * @return the BoardHistoryModel object itself.
     */
    public BoardHistoryModel withBoardId(int boardId) {
        this.boardId = boardId;
        return this;
    }

    /**
     * Get gets or sets the account identifier.
     *
     * @return the accountId value
     */
    public int accountId() {
        return this.accountId;
    }

    /**
     * Set gets or sets the account identifier.
     *
     * @param accountId the accountId value to set
     * @return the BoardHistoryModel object itself.
     */
    public BoardHistoryModel withAccountId(int accountId) {
        this.accountId = accountId;
        return this;
    }

    /**
     * Get gets or sets the created user identifier.
     *
     * @return the createdUserId value
     */
    public int createdUserId() {
        return this.createdUserId;
    }

    /**
     * Set gets or sets the created user identifier.
     *
     * @param createdUserId the createdUserId value to set
     * @return the BoardHistoryModel object itself.
     */
    public BoardHistoryModel withCreatedUserId(int createdUserId) {
        this.createdUserId = createdUserId;
        return this;
    }

    /**
     * Get gets or sets the modified user identifier.
     *
     * @return the modifiedUserId value
     */
    public int modifiedUserId() {
        return this.modifiedUserId;
    }

    /**
     * Set gets or sets the modified user identifier.
     *
     * @param modifiedUserId the modifiedUserId value to set
     * @return the BoardHistoryModel object itself.
     */
    public BoardHistoryModel withModifiedUserId(int modifiedUserId) {
        this.modifiedUserId = modifiedUserId;
        return this;
    }

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
     * @return the BoardHistoryModel object itself.
     */
    public BoardHistoryModel withName(String name) {
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
     * @return the BoardHistoryModel object itself.
     */
    public BoardHistoryModel withDescription(String description) {
        this.description = description;
        return this;
    }

    /**
     * Get gets or sets the created date.
     *
     * @return the createdDate value
     */
    public DateTime createdDate() {
        return this.createdDate;
    }

    /**
     * Set gets or sets the created date.
     *
     * @param createdDate the createdDate value to set
     * @return the BoardHistoryModel object itself.
     */
    public BoardHistoryModel withCreatedDate(DateTime createdDate) {
        this.createdDate = createdDate;
        return this;
    }

    /**
     * Get gets or sets the modified date.
     *
     * @return the modifiedDate value
     */
    public DateTime modifiedDate() {
        return this.modifiedDate;
    }

    /**
     * Set gets or sets the modified date.
     *
     * @param modifiedDate the modifiedDate value to set
     * @return the BoardHistoryModel object itself.
     */
    public BoardHistoryModel withModifiedDate(DateTime modifiedDate) {
        this.modifiedDate = modifiedDate;
        return this;
    }

}
