Rails.application.routes.draw do
  get 'welcome/index'
  devise_for :mentors, path: 'mentors', controllers: { sessions: 'mentors/sessions' }
  devise_for :fridas, path: 'fridas', controllers: { sessions: 'fridas/sessions' }
  resources :tests
  resources :feedbacks
  resources :teams
  resources :delivers
  resources :frida_modules
  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html

  root 'welcome#index'
end
