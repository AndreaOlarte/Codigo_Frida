Rails.application.routes.draw do
  devise_for :mentors
  devise_for :fridas
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
