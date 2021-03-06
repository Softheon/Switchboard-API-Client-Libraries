/*
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

'use strict';

/**
 * The board post model.
 *
 */
class BoardPostModel {
  /**
   * Create a BoardPostModel.
   * @member {string} [name] Gets or sets the name.
   * @member {string} [description] Gets or sets the description.
   */
  constructor() {
  }

  /**
   * Defines the metadata of BoardPostModel
   *
   * @returns {object} metadata of BoardPostModel
   *
   */
  mapper() {
    return {
      required: false,
      serializedName: 'BoardPostModel',
      type: {
        name: 'Composite',
        className: 'BoardPostModel',
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
          }
        }
      }
    };
  }
}

module.exports = BoardPostModel;
