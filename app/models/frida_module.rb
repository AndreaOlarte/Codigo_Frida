class FridaModule < ApplicationRecord
  has_many :delivers
  has_one_attached :content_file
end
