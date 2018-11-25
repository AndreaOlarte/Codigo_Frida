class Feedback < ApplicationRecord
  belongs_to :mentor
  belongs_to :leader
  belongs_to :deliver
end
