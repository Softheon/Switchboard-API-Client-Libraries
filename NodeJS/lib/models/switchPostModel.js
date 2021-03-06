/*
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

'use strict';

/**
 * Switch Post Model.
 *
 */
class SwitchPostModel {
  /**
   * Create a SwitchPostModel.
   * @member {string} [name] Gets or sets the name.
   * @member {string} [description] Gets or sets the description.
   * @member {string} [comment] Gets or sets the comment.
   * @member {string} [value] Gets or sets the value.
   * @member {string} [valueType] Gets or sets the type of the value.
   */
  constructor() {
  }

  /**
   * Defines the metadata of SwitchPostModel
   *
   * @returns {object} metadata of SwitchPostModel
   *
   */
  mapper() {
    return {
      required: false,
      serializedName: 'SwitchPostModel',
      type: {
        name: 'Composite',
        className: 'SwitchPostModel',
        modelProperties: {
          name: {
            required: false,
            serializedName: 'name',
            constraints: {
              MaxLength: 50,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          description: {
            required: false,
            serializedName: 'description',
            constraints: {
              MaxLength: 250,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          comment: {
            required: false,
            serializedName: 'comment',
            constraints: {
              MaxLength: 250,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          },
          value: {
            required: false,
            serializedName: 'value',
            type: {
              name: 'String'
            }
          },
          valueType: {
            required: false,
            serializedName: 'valueType',
            constraints: {
              MaxLength: 10,
              MinLength: 0
            },
            type: {
              name: 'String'
            }
          }
        }
      }
    };
  }
}

module.exports = SwitchPostModel;
