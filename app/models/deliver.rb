class Deliver < ApplicationRecord
  has_many :feedbacks
  belongs_to :team
  belongs_to :frida_module
  has_one_attached :deliver_file
end
