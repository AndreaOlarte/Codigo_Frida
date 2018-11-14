Rails.application.routes.draw do
  get 'welcome/index'
  devise_for :mentors, path: 'mentors', controllers: { sessions: 'mentors/sessions' }
  devise_for :fridas, path: 'fridas', controllers: { sessions: 'fridas/sessions' }
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html

  root 'welcome#index'
end
