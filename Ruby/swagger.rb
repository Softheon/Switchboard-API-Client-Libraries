# encoding: utf-8
# Code generated by Microsoft (R) AutoRest Code Generator.
# Changes may cause incorrect behavior and will be lost if the code is
# regenerated.

require 'uri'
require 'cgi'
require 'date'
require 'json'
require 'base64'
require 'erb'
require 'securerandom'
require 'time'
require 'timeliness'
require 'faraday'
require 'faraday-cookie_jar'
require 'concurrent'
require 'ms_rest'
require 'generated/swagger/module_definition'

module Swagger
  autoload :SoftheonSwitchboard,                                'generated/swagger/softheon_switchboard.rb'

  module Models
    autoload :BoardFilterModel,                                   'generated/swagger/models/board_filter_model.rb'
    autoload :SwitchModel,                                        'generated/swagger/models/switch_model.rb'
    autoload :BoardPutModel,                                      'generated/swagger/models/board_put_model.rb'
    autoload :SwitchPostModel,                                    'generated/swagger/models/switch_post_model.rb'
    autoload :BoardHistoryModel,                                  'generated/swagger/models/board_history_model.rb'
    autoload :SwitchPutModel,                                     'generated/swagger/models/switch_put_model.rb'
    autoload :BoardPostModel,                                     'generated/swagger/models/board_post_model.rb'
    autoload :SwitchHistoryModel,                                 'generated/swagger/models/switch_history_model.rb'
    autoload :BoardModel,                                         'generated/swagger/models/board_model.rb'
    autoload :SwitchFilterModel,                                  'generated/swagger/models/switch_filter_model.rb'
  end
end
