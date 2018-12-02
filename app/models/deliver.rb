class Deliver < ApplicationRecord
  has_many :feedbacks
  belongs_to :team
  belongs_to :frida_module
end
