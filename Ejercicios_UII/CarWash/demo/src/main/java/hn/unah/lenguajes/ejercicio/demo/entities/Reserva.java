package hn.unah.lenguajes.ejercicio.demo.entities;

import java.time.LocalDate;

import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import lombok.Data;

@Entity
@Data

public class Reserva {
    @Id
    private int idReserva;

    private int idCliente;
    private int idVehiculo;
    private LocalDate fecha;
    private int fechas;
    private double total;

}
