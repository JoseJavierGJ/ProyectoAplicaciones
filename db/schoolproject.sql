-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2023 a las 17:17:53
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `schoolproject`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(38) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admission`
--

INSERT INTO `admission` (`id`, `name`, `email`, `phone`, `message`) VALUES
(2, 'Yoselin ', 'Yos@gmail.com', 123456789, 'Como estudiante interesada en un curso, busco aprender y crecer en un área específica que me apasiona. Estoy motivada, curiosa y comprometida con mi desarrollo personal y profesional. Veo el curso como una oportunidad emocionante para adquirir conocimientos y habilidades que me ayudarán a alcanzar mis metas.'),
(3, 'Daniel', 'dani@hotmail.com', 456123789, 'Me llama la atención el desarrollo backend, estoy motivado y entusiasmado por aprender. Estoy listo para invertir tiempo y esfuerzo en el curso. Mi objetivo es convertirme en un experto en el desarrollo de aplicaciones backend.'),
(4, 'Javier', 'javier@gmail.com', 768535756, 'Me interesa el curso de inteligencia artificial, estoy emocionado y motivado por aprender sobre este campo en constante crecimiento. Mi objetivo es desarrollar habilidades sólidas en la aplicación de algoritmos y modelos para resolver problemas complejos de manera inteligente. Estoy entusiasmado por las oportunidades que la inteligencia artificial ofrece en la innovación tecnológica y la transformación de industrias.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

CREATE TABLE `course` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `image`) VALUES
(4, 'Matemáticas Discretas ', 'El curso de Matemáticas Discretas explora conceptos fundamentales como conjuntos, lógica, teoría de grafos y álgebra booleana. Los estudiantes desarrollan habilidades analíticas y de resolución de problemas, aplicables en programación, criptografía y teoría de la computación. Es relevante para estudiantes de ciencias de la computación, ingeniería y matemáticas.', 'image/mate-dis.png'),
(5, 'Álgebra', '\r\nEl curso de Álgebra proporciona una comprensión profunda de los conceptos y aplicaciones fundamentales del álgebra. Los estudiantes desarrollarán habilidades en resolución de ecuaciones, manipulación algebraica y modelado matemático. Es esencial para estudiantes de matemáticas, ciencias de la computación y disciplinas relacionadas.', ' image/cursos-de-algebra.jpg'),
(6, 'Dibujo Industrial ', 'El curso de Dibujo Industrial enseña las habilidades prácticas necesarias para representar objetos y comunicar diseños técnicos en el ámbito industrial. Los estudiantes aprenderán a crear planos técnicos precisos y a utilizar herramientas de dibujo como la proyección ortográfica y las vistas isométricas. Es esencial para estudiantes de ingeniería, arquitectura y diseño industrial.', ' image/dibujo-ind.jfif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_course`
--

CREATE TABLE `student_course` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `student_course`
--

INSERT INTO `student_course` (`id`, `name`, `date`, `time`) VALUES
(1, 'Español', 'Lunes - Miércoles - Viernes ', '10:00 am - 12:00 pm'),
(2, 'Matemáticas', 'Lunes - Jueves - Miércoles ', '12:00 am - 2:00 pm'),
(3, 'Biología', 'Lunes - Miércoles - Jueves', '8:00 am - 10:00 am'),
(4, 'Eduación Física', 'Viernes', '12:00 am - 2:00 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `student_results`
--

CREATE TABLE `student_results` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `grade` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `student_results`
--

INSERT INTO `student_results` (`id`, `name`, `grade`) VALUES
(1, 'Físca', 8.5),
(2, 'Español', 7.0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher`
--

CREATE TABLE `teacher` (
  `id` int(20) NOT NULL,
  `name` varchar(38) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(38) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `description`, `image`) VALUES
(3, 'Dr. Maximus', 'El profesor de Maximus con doctorado es altamente calificado y especializado en su campo. Su materia puede ser considerada difícil debido a su nivel avanzado. Requiere dedicación y esfuerzo por parte de los estudiantes para comprender y aplicar los conceptos complejos. Sin embargo, aquellos que perseveren tendrán la oportunidad de adquirir un profundo conocimiento del tema.', 'image/view-prof1.png'),
(4, 'Dr. Maxwell', 'El profesor Michi con dos doctorados es altamente calificado y experto en su campo. Su enfoque pedagógico facilita el aprendizaje y la comprensión de la materia. Está disponible para brindar apoyo adicional y asegurar que los estudiantes superen con éxito el curso.', 'image/view-prof2.jfif'),
(5, 'Dr. Parrot', 'El profesor Parrot es un experto en bases de datos con un doctorado, pero su materia es conocida por ser difícil de pasar. Requiere dedicación y esfuerzo extra, pero aquellos que se comprometen pueden obtener un valioso conocimiento.', 'image/view-prof3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'Admin', 214748367, 'admin@hot.com', 'admin', '123'),
(2, 'Student', 537183623, 'student@hot.com', 'student', '123'),
(3, 'Yose', 451627261, 'yose@ugto.mx', 'student', '123'),
(4, 'Javier', 736152617, 'javier@ugto.mx', 'student', '123'),
(5, 'Daniel', 245612345, 'daniel@ugto.mx', 'student', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `student_results`
--
ALTER TABLE `student_results`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `course`
--
ALTER TABLE `course`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `student_course`
--
ALTER TABLE `student_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `student_results`
--
ALTER TABLE `student_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
