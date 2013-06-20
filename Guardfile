# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'less', :all_on_start => true, :all_after_change => true, :output => 'public/css' do
  watch(%r{app/assets/.+\.less$})
end

guard 'livereload' do
  watch(%r{app/views/.+\.(php)$})
  watch(%r{public/.+\.(css|js|html)})
  watch(%r{app/routes.php})
end

