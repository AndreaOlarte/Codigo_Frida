class Team < ApplicationRecord
  belongs to :mentor
  has_many :deliveries #?
  has_many :fridas
end
