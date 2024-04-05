package hn.unah.lenguajes.ejercicio.demo.entities;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToOne;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "tipovehiculo")
@Data

public class tipoVehiculo {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "idtipovehiculo")
    private int idTipoVehiculo;

    private String descripcion;
    private double precioXhora;

    @OneToOne(mappedBy = "tipoVehiculo")
    private Vehiculo vehiculo;
}
