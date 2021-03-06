// <auto-generated>
// Code generated by Microsoft (R) AutoRest Code Generator.
// Changes may cause incorrect behavior and will be lost if the code is
// regenerated.
// </auto-generated>

namespace Softheon.API.Switchboard.Client.Models
{
    using Newtonsoft.Json;
    using System.Linq;

    /// <summary>
    /// The switch history model.
    /// </summary>
    public partial class SwitchHistoryModel
    {
        /// <summary>
        /// Initializes a new instance of the SwitchHistoryModel class.
        /// </summary>
        public SwitchHistoryModel()
        {
            CustomInit();
        }

        /// <summary>
        /// Initializes a new instance of the SwitchHistoryModel class.
        /// </summary>
        /// <param name="switchHistoryId">Gets or sets the switch history
        /// identifier.</param>
        /// <param name="switchId">Gets or sets the switch identifier.</param>
        /// <param name="boardId">Gets or sets the board identifier.</param>
        /// <param name="createdUserId">Gets or sets the created user
        /// identifier.</param>
        /// <param name="modifiedUserId">Gets or sets the modified user
        /// identifier.</param>
        /// <param name="name">Gets or sets the name.</param>
        /// <param name="description">Gets or sets the description.</param>
        /// <param name="comment">Gets or sets the comment.</param>
        /// <param name="createdDate">Gets or sets the created date.</param>
        /// <param name="modifiedDate">Gets or sets the modified date.</param>
        /// <param name="value">Gets or sets the value.</param>
        /// <param name="valueType">Gets or sets the type of the value.</param>
        /// <param name="version">Gets or sets the version.</param>
        public SwitchHistoryModel(int switchHistoryId = default(int), int switchId = default(int), int boardId = default(int), int createdUserId = default(int), int modifiedUserId = default(int), string name = default(string), string description = default(string), string comment = default(string), System.DateTime createdDate = default(System.DateTime), System.DateTime modifiedDate = default(System.DateTime), string value = default(string), string valueType = default(string), string version = default(string))
        {
            SwitchHistoryId = switchHistoryId;
            SwitchId = switchId;
            BoardId = boardId;
            CreatedUserId = createdUserId;
            ModifiedUserId = modifiedUserId;
            Name = name;
            Description = description;
            Comment = comment;
            CreatedDate = createdDate;
            ModifiedDate = modifiedDate;
            Value = value;
            ValueType = valueType;
            Version = version;
            CustomInit();
        }

        /// <summary>
        /// An initialization method that performs custom operations like setting defaults
        /// </summary>
        partial void CustomInit();

        /// <summary>
        /// Gets or sets the switch history identifier.
        /// </summary>
        [JsonProperty(PropertyName = "switchHistoryId")]
        public int SwitchHistoryId { get; set; }

        /// <summary>
        /// Gets or sets the switch identifier.
        /// </summary>
        [JsonProperty(PropertyName = "switchId")]
        public int SwitchId { get; set; }

        /// <summary>
        /// Gets or sets the board identifier.
        /// </summary>
        [JsonProperty(PropertyName = "boardId")]
        public int BoardId { get; set; }

        /// <summary>
        /// Gets or sets the created user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "createdUserId")]
        public int CreatedUserId { get; set; }

        /// <summary>
        /// Gets or sets the modified user identifier.
        /// </summary>
        [JsonProperty(PropertyName = "modifiedUserId")]
        public int ModifiedUserId { get; set; }

        /// <summary>
        /// Gets or sets the name.
        /// </summary>
        [JsonProperty(PropertyName = "name")]
        public string Name { get; set; }

        /// <summary>
        /// Gets or sets the description.
        /// </summary>
        [JsonProperty(PropertyName = "description")]
        public string Description { get; set; }

        /// <summary>
        /// Gets or sets the comment.
        /// </summary>
        [JsonProperty(PropertyName = "comment")]
        public string Comment { get; set; }

        /// <summary>
        /// Gets or sets the created date.
        /// </summary>
        [JsonProperty(PropertyName = "createdDate")]
        public System.DateTime CreatedDate { get; set; }

        /// <summary>
        /// Gets or sets the modified date.
        /// </summary>
        [JsonProperty(PropertyName = "modifiedDate")]
        public System.DateTime ModifiedDate { get; set; }

        /// <summary>
        /// Gets or sets the value.
        /// </summary>
        [JsonProperty(PropertyName = "value")]
        public string Value { get; set; }

        /// <summary>
        /// Gets or sets the type of the value.
        /// </summary>
        [JsonProperty(PropertyName = "valueType")]
        public string ValueType { get; set; }

        /// <summary>
        /// Gets or sets the version.
        /// </summary>
        [JsonProperty(PropertyName = "version")]
        public string Version { get; set; }

    }
}
