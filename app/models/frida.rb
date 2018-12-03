class Frida < ApplicationRecord
  # Include default devise modules. Others available are:
  # :confirmable, :lockable, :timeoutable, :trackable and :omniauthable
  devise :database_authenticatable, :registerable,
         :recoverable, :rememberable, :validatable

  after_save :set_attribute_to_devise
  # before_create :create_team
  # before_validation(on: :create) do
  #   @team_code = Randomstring.generate(10)
  #   Team.create(code: @team_code)
  #   byebug
  # end

  belongs_to :team, optional: true

  has_one_attached :avatar

  private

  def set_attribute_to_devise
    self.team_id = Team.last.id
  end

  # def create_team
  #   @team_code = Randomstring.generate(10)
  #   @team_id = Team.create(code: @team_code).id
  #   byebug
  # end
end
