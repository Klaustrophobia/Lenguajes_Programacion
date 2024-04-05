package hn.unah.lenguajes1700.datos.entities;

import com.fasterxml.jackson.annotation.JsonIgnore;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToOne;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "direccion")  // Hay que especificiar el nombre de la tabla en concreto que se uso en MySQL
@Data // Esta anotacion lo que hace de un solo getters, setters y constructores ademas de sus propiedades
// @Getter
// @Setter
// @AllArgsConstructor // Genera constructores que reciba todos los parametros
// @NoArgsConstructor Genera constructores que no reciba todos los parametros
public class Direccion {
    @Id  // Este decorador dice si es la llave primaria de la tabla en la base de datos
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "iddireccion")
    private int idDireccion;

    private String departamento;
    private String ciudad;
    private String calle;

    @JsonIgnore
    @OneToOne (mappedBy = "direccion") // Aqui se mapea de la manera que se dejo en la entidad propietaria
    private Cliente cliente;

}
