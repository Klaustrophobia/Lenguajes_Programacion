package hn.unah.lenguajes1700.datos.entities;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToOne;
import lombok.Data;

@Entity
@Data
public class Cliente {
    
    @Id
    private String dni;

    private String nombre;
    private String apellido;
    private String correo;
    private String telefono;

    // Aqui se realiza la relacion para la Foreign Key
    @OneToOne(cascade = CascadeType.ALL)
    @JoinColumn(name = "iddireccion", referencedColumnName = "iddireccion") // Este decorador solo se utiliza en la entidad propietaria de la relacion, name es la PK de la tabla
    private Direccion direccion;

}
