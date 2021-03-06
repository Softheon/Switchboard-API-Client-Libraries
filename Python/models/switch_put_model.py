# coding=utf-8
# --------------------------------------------------------------------------
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.
# --------------------------------------------------------------------------

from msrest.serialization import Model


class SwitchPutModel(Model):
    """Switch Put Model.

    :param name: Gets or sets the name.
    :type name: str
    :param description: Gets or sets the description.
    :type description: str
    :param comment: Gets or sets the comment.
    :type comment: str
    :param value: Gets or sets the value.
    :type value: str
    :param value_type: Gets or sets the type of the value.
    :type value_type: str
    """

    _validation = {
        'name': {'max_length': 50, 'min_length': 0},
        'description': {'max_length': 250, 'min_length': 0},
        'comment': {'max_length': 250, 'min_length': 0},
        'value_type': {'max_length': 10, 'min_length': 0},
    }

    _attribute_map = {
        'name': {'key': 'name', 'type': 'str'},
        'description': {'key': 'description', 'type': 'str'},
        'comment': {'key': 'comment', 'type': 'str'},
        'value': {'key': 'value', 'type': 'str'},
        'value_type': {'key': 'valueType', 'type': 'str'},
    }

    def __init__(self, name=None, description=None, comment=None, value=None, value_type=None):
        super(SwitchPutModel, self).__init__()
        self.name = name
        self.description = description
        self.comment = comment
        self.value = value
        self.value_type = value_type
