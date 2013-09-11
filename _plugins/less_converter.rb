module Jekyll
  class LessConverter < Converter
    safe true
    priority :high
    
    def setup
      return if @setup
      require 'less'
      @setup = true
    rescue LoadError
      STDERR.puts 'You are missing the library required for less. Please run:'
      STDERR.puts ' $ [sudo] gem install less'
      raise FatalException.new("Missing dependency: less")
    end
    
    def matches(ext)
	#NOTE: Brian V HACK, changing the match regex to something more obscure since this lessc gem won't run on current mt server. 9/11/13
      ext =~ /moreisless/i
    end
    
    def output_ext(ext)
      ".css"
    end
    
    def convert(content)
      setup
      begin
        parser = Less::Parser.new
        parser = parser.parse(content).to_css(:compress => true)
      rescue => e
        puts "Less Exception: #{e.message}"
      end
    end
  end
end
