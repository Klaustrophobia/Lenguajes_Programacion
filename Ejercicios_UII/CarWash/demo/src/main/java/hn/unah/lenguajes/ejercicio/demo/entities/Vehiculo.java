package hn.unah.lenguajes.ejercicio.demo.entities;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToOne;
import lombok.Data;

@Entity
@Data

public class Vehiculo {
    @Id
    private int idVehiculo;

    private String marca;
    private int anio;
    private int disponible;

    @OneToOne(cascade = CascadeType.ALL)
    @JoinColumn(name = "idtipovehiculo", referencedColumnName = "idtipovehiculo")
    private tipoVehiculo tipoVehiculo;

}
