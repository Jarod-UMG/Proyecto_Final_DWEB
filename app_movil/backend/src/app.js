import express from 'express';
import cors from 'cors';
import morgan from 'morgan';
import { options } from './swaggerOptions';
import swaggerJSDoc from 'swagger-jsdoc';
import swaggerUI from 'swagger-ui-express';

const specs = swaggerJSDoc(options)

import productosRoutes from './routes/productos';

const app = express();

app.use(cors());
app.use(morgan("dev"));
app.use(express.json());

app.use(productosRoutes);

app.use('/docs', swaggerUI.serve, swaggerUI.setup(specs))

export default app