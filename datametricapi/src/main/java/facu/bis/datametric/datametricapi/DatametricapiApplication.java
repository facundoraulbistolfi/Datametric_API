package facu.bis.datametric.datametricapi;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.boot.context.properties.EnableConfigurationProperties;

@SpringBootApplication
@EnableConfigurationProperties({
    FileStorageProperties.class
})
public class DatametricapiApplication {

	public static void main(String[] args) {
		SpringApplication.run(DatametricapiApplication.class, args);
	}

}
