# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class SwitchHistoryModel(Model):
    """The switch history model.

    :param switch_history_id: Gets or sets the switch history identifier.
    :type switch_history_id: int
    :param switch_id: Gets or sets the switch identifier.
    :type switch_id: int
    :param board_id: Gets or sets the board identifier.
    :type board_id: int
    :param created_user_id: Gets or sets the created user identifier.
    :type created_user_id: int
    :param modified_user_id: Gets or sets the modified user identifier.
    :type modified_user_id: int
    :param name: Gets or sets the name.
    :type name: str
    :param description: Gets or sets the description.
    :type description: str
    :param comment: Gets or sets the comment.
    :type comment: str
    :param created_date: Gets or sets the created date.
    :type created_date: datetime
    :param modified_date: Gets or sets the modified date.
    :type modified_date: datetime
    :param value: Gets or sets the value.
    :type value: str
    :param value_type: Gets or sets the type of the value.
    :type value_type: str
    :param version: Gets or sets the version.
    :type version: str
    """

    _attribute_map = {
        'switch_history_id': {'key': 'switchHistoryId', 'type': 'int'},
        'switch_id': {'key': 'switchId', 'type': 'int'},
        'board_id': {'key': 'boardId', 'type': 'int'},
        'created_user_id': {'key': 'createdUserId', 'type': 'int'},
        'modified_user_id': {'key': 'modifiedUserId', 'type': 'int'},
        'name': {'key': 'name', 'type': 'str'},
        'description': {'key': 'description', 'type': 'str'},
        'comment': {'key': 'comment', 'type': 'str'},
        'created_date': {'key': 'createdDate', 'type': 'iso-8601'},
        'modified_date': {'key': 'modifiedDate', 'type': 'iso-8601'},
        'value': {'key': 'value', 'type': 'str'},
        'value_type': {'key': 'valueType', 'type': 'str'},
        'version': {'key': 'version', 'type': 'str'},
    }

    def __init__(self, switch_history_id=None, switch_id=None, board_id=None, created_user_id=None, modified_user_id=None, name=None, description=None, comment=None, created_date=None, modified_date=None, value=None, value_type=None, version=None):
        super(SwitchHistoryModel, self).__init__()
        self.switch_history_id = switch_history_id
        self.switch_id = switch_id
        self.board_id = board_id
        self.created_user_id = created_user_id
        self.modified_user_id = modified_user_id
        self.name = name
        self.description = description
        self.comment = comment
        self.created_date = created_date
        self.modified_date = modified_date
        self.value = value
        self.value_type = value_type
        self.version = version
