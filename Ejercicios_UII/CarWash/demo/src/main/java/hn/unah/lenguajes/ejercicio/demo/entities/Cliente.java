package hn.unah.lenguajes.ejercicio.demo.entities;

import java.time.LocalDate;

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
    private int codigoCliente;

    private String nombre;
    private String apellido;
    private LocalDate fechaIngreso;

    @OneToOne(cascade = CascadeType.ALL)
    @JoinColumn(name = "idtipocliente", referencedColumnName = "idtipocliente")
    private tipoCliente tipoCliente;

}
