class Team < ApplicationRecord
  belongs_to :mentor, optional: true
  has_many :deliveries #?
  has_many :fridas
end
